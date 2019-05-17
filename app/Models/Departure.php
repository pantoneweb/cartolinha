<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Departure extends Model implements TableInterface
{
    protected $fillable = [
        'home_team_id',
        'guest_team_id',
        'home_team_goals',
        'guest_team_goals',
        'datetime'
    ];

    public function home_team(){
        return $this->hasOne(Team::class, 'id', 'home_team_id');
    }

    public function guest_team(){
        return $this->hasOne(Team::class, 'id', 'guest_team_id');
    }

    public function getTableHeaders()
    {
        return ['ID', 'Time da Casa', 'Time Convidado'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Time da Casa':
                return $this->home_team->name;
            case 'Time Convidado':
                return $this->guest_team->name;
            default:
                return '';
        }
    }
}
