<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Player extends Model implements TableInterface
{
    protected $fillable = [
        'position_id',
        'name',
        'photo'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
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
                return '<img src="" width="50">';
            case 'Posição':
                return $this->position->name;
            case 'Nome':
                return $this->name;
            default:
                return '';
        }
    }
}
