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
        $name = 'Rodadas';
        $route = 'departure.index';
        $formTemplate = 'departure.form';
        return view('partials.form-template', compact('name', 'route', 'teams', 'activities', 'x', 'form', 'formTemplate'));
    }

    public function store(Request $request)
    {
        $departure = [];
        foreach (array_keys($request->get('departure')) as $teamId) {
            $departure[] = [
                'teamId' => $teamId,
                'data' => $request->get('departure')[$teamId]
            ];
        }

        $departure1 = Departure::create([
            'home_team_id' => $departure[0]['teamId'],
            'guest_team_id' => $departure[1]['teamId'],
            'home_team_goals' => $departure[0]['data']['gols'],
            'guest_team_goals' => $departure[1]['data']['gols'],
            'datetime' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $departure2 = Departure::create([
            'home_team_id' => $departure[2]['teamId'],
            'guest_team_id' => $departure[3]['teamId'],
            'home_team_goals' => $departure[2]['data']['gols'],
            'guest_team_goals' => $departure[3]['data']['gols'],
            'datetime' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        foreach ($departure as $idx => $team) {
            foreach ($team['data'] as $player => $activities) {
                if ($player == "gols")
                    continue;
                foreach ($activities as $activity) {
                    PlayerHasActivity::create([
                        'player_id' => $player,
                        'activity_id' => $activity,
                        'departure_id' => ($idx < 2) ? $departure1->id : $departure2->id,
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
