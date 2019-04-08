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

    public function getTableHeaders()
    {
        return ['ID', 'Nome'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Nome':
                return $this->name;
            default:
                return '';
        }
    }
}
