<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class PlayerHasActivity extends Model
{
    protected $primaryKey = 'player_id';
    protected $table = 'players_has_activities';

    protected $fillable = [
        'player_id',
        'activity_id',
        'departure_id',
        'created_at',
        'updated_at'
    ];
}
