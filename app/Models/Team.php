<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Team extends Model implements TableInterface
{
    protected $fillable = [
        'name',
        'photo'
    ];

    public function players()
    {
        return $this->hasMany(Player::class)->with('position');
    }

    public function getTableHeaders()
    {
        return ['ID', 'Foto', 'Nome'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Foto':
                return '<img src="' . url("team/{$this->photo}") . '" width="50">';
            case 'Nome':
                return $this->name;
            default:
                return '';
        }
    }
}
