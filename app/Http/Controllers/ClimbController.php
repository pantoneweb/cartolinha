<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Departure;
use App\Models\PlayerHasActivity;
use App\Models\Team;
use App\Models\UserHasDeparture;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClimbController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $departuresIds = UserHasDeparture::where('user_id', Auth::id())->get()->pluck('departure_id');
        $departures = Departure::whereIn('id', $departuresIds)->get();
        return view("climb.index", compact('departures'));
    }

    public function create()
    {
        $teams = Team::get();
        $departuresIds = UserHasDeparture::where('user_id', Auth::id())->get()->pluck('departure_id')->all();
        $departures = Departure::where('datetime_start', '<', Carbon::now()->format('Y-m-d H:i:s'))->whereNotIn('id', $departuresIds)->get();

        $form = '';
        $name = 'Escalação';
        $route = 'climb.index';
        $formTemplate = 'climb.form';
        return view('partials.form-template', compact('name', 'route', 'form', 'formTemplate', 'teams', 'departures'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $score = Auth::user()->score;
        foreach ($data['player'] ?? [] as $playerId) {
            UserHasDeparture::create([
                'user_id' => Auth::id(),
                'departure_id' => $data['departure_id'],
                'player_id' => $playerId,
            ]);

            $activities = PlayerHasActivity::where('departure_id', $data['departure_id'])
                ->where('player_id', $playerId)->get();

            foreach ($activities as $activity)
                $score += Activity::find($activity->activity_id)->score;
        }

        $user = User::find(Auth::id());
        $user->score = $score;
        $user->save();

        return redirect()->route('climb.index');
    }

    public function results()
    {
        $sql = "SELECT DISTINCT user_id FROM (SELECT uha2.user_id FROM users_has_departures as uha2 INNER JOIN users as u1 ON u1.id = uha2.user_id ORDER BY user_id) t";
        $users = DB::select($sql);

        return view("results", compact('users'));
    }
}
