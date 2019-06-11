<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Player extends Model implements TableInterface
{
    protected $fillable = [
        'position_id',
        'position_id',
        'name',
        'photo'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function activies($departureId)
    {
        return $this->belongsToMany(Activity::class, 'players_has_activities', 'player_id', 'activity_id')->where('departure_id', $departureId);
    }

    public function getTableHeaders()
    {
        return ['ID', 'Foto', 'Posição', 'Nome'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Foto':
                return '<img src="' . Storage::url("player/{$this->photo}") . '" width="50">';
            case 'Posição':
                return $this->position->name;
            case 'Nome':
                return $this->name;
            default:
                return '';
        }
    }
}
