<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Departure;
use App\Models\PlayerHasActivity;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DepartureController extends Controller
{
    private $departure;

    public function __construct(Departure $departure)
    {
        $this->departure = $departure;
    }

    public function index()
    {
        $data = $this->departure->paginate();
        return view("departure.index", compact('data'));
    }

    public function create()
    {
        $x = 0;
        $teams = Team::with('players')->inRandomOrder()->get();
        $activities = Activity::get();
        return view('departure.create', compact('teams', 'activities', 'x'));
    }

    public function store(Request $request)
    {
        $departure = [];
        foreach ($request->get('departure') as $teams) {
            $departure[] = key($teams);
        }

        $departure1 = Departure::create([
            'home_team_id' => $departure[0],
            'guest_team_id' => $departure[1],
            'home_team_goals' => 0,
            'guest_team_goals' => 0,
            'datetime' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $departure2 = Departure::create([
            'home_team_id' => $departure[2],
            'guest_team_id' => $departure[3],
            'home_team_goals' => 0,
            'guest_team_goals' => 0,
            'datetime' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        foreach ($request->get('departure') as $idx => $teams) {
            foreach ($teams as $player => $activies) {
                foreach ($activies as $activity) {
                    PlayerHasActivity::create([
                        'player_id' => $player,
                        'activity_id' => $activity,
                        'departure_id' => ($idx < 1) ? $departure1->id : $departure2->id,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
                }
            }
        }

        return redirect()->route('departure.index');
    }

    public function edit($id)
    {
        $form = $this->createForm(DepartureForm::class, [
            'url' => route('departure.update', ['id' => $id]),
            'model' => $this->departure->find($id),
            'method' => 'PUT',
        ]);
        return view('departure.edit', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $form = $this->createForm(DepartureForm::class, [
            'url' => route('departure.update', ['id' => $id]),
            'model' => $this->departure->find($id),
            'method' => 'PUT',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $this->departure->fill($request->all())->save();

        return redirect()->route('departure.index');
    }

    public function destroy($id)
    {
        //
    }
}
