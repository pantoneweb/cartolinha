<?php

namespace App\Http\Controllers;

use App\Models\Departure;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public $team;
    public $departure;

    public function __construct(Team $team, Departure $departure)
    {
        $this->team = $team;
        $this->departure = $departure;
    }

    public function index()
    {
        $teams = $this->team->get();
        $departures = $this->departure->with('home_team', 'guest_team')->limit(3)->orderBy(DB::raw('random()'))->get();
        return view('welcome', compact('teams', 'departures'));
    }
}
