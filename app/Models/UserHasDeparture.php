<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class UserHasDeparture extends Model
{
    protected $primaryKey = 'user_id';
    protected $table = 'users_has_departures';

    protected $fillable = [
        'user_id',
        'departure_id',
        'player_id',
        'created_at',
        'updated_at'
    ];

    public function departure()
    {
        return $this->belongsTo(Departure::class);
    }
}
