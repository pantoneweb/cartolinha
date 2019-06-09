<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model implements TableInterface
{
    protected $fillable = [
        'name',
        'score',
    ];

    public function getTableHeaders()
    {
        return ['ID', 'Nome', 'Pontuação'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Nome':
                return $this->name;
            case 'Pontuação':
                return $this->score . ' Pontos';
            default:
                return '';
        }
    }
}
