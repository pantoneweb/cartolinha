<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Departure extends Model implements TableInterface
{
    protected $fillable = [
        'home_team_id',
        'guest_team_id',
        'home_team_goals',
        'guest_team_goals',
        'datetime_start',
        'datetime_end'
    ];

    public function home_team()
    {
        return $this->hasOne(Team::class, 'id', 'home_team_id');
    }

    public function guest_team()
    {
        return $this->hasOne(Team::class, 'id', 'guest_team_id');
    }

    public function has_players()
    {
        return $this->belongsToMany(Player::class, 'users_has_departures', 'departure_id', 'player_id');
    }

    public function getTableHeaders()
    {
        return ['ID', 'Time da casa', 'Time convidado', 'Gols time da casa', 'Gols time convidado', 'Data escalações', 'Data partida'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Time da casa':
                return '<img class="img-fluid rounded" style="height: 30px;"
                                         src="' . Storage::url("team/{$this->home_team->photo}") . '"
                                         lazy="loaded"> ' . $this->home_team->name;
            case 'Time convidado':
                return '<img class="img-fluid rounded" style="height: 30px;"
                                         src="' . Storage::url("team/{$this->guest_team->photo}") . '"
                                         lazy="loaded"> ' . $this->guest_team->name;
            case 'Gols time da casa':
                return $this->home_team_goals;
            case 'Gols time convidado':
                return $this->guest_team_goals;
            case 'Data escalações':
                return Carbon::create($this->datetime_start, 'Y-m-d H:i:s')->format('d/m/Y H:i');
            case 'Data partida':
                return Carbon::create($this->datetime_end, 'Y-m-d H:i:s')->format('d/m/Y H:i');
            default:
                return '';
        }
    }
}
