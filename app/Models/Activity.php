<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model implements TableInterface
{
    protected $fillable = [
        'account_id',
        'name',
        'value',
        'qt_notes',
        'qt_companies',
        'qt_users',
        'public'
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
                return $this->score;
            default:
                return '';
        }
    }
}
