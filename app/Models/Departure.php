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
        'datetime'
    ];

    public function home_team()
    {
        return $this->hasOne(Team::class, 'id', 'home_team_id');
    }

    public function guest_team()
    {
        return $this->hasOne(Team::class, 'id', 'guest_team_id');
    }

    public function getTableHeaders()
    {
        return ['ID', 'Time da Casa', 'Time Convidado', 'Gols time da Casa', 'Gols time convidado', 'Data Partida'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Time da Casa':
                return '<img class="img-fluid rounded" style="height: 30px;"
                                         src="' . Storage::url("team/{$this->home_team->photo}") . '"
                                         lazy="loaded"> ' . $this->home_team->name;
            case 'Time Convidado':
                return '<img class="img-fluid rounded" style="height: 30px;"
                                         src="' . Storage::url("team/{$this->guest_team->photo}") . '"
                                         lazy="loaded"> ' . $this->guest_team->name;
            case 'Gols time da Casa':
                return $this->home_team_goals;
            case 'Gols time convidado':
                return $this->guest_team_goals;
            case 'Data Partida':
                return Carbon::create($this->datetime, 'Y-m-d H:i:s')->format('d/m/Y H:i');
            default:
                return '';
        }
    }
}
