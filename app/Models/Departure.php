<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class Departure extends Model implements TableInterface
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
        return ['ID', 'Nome', 'Valor', 'Quant. de notas', 'Quant. de usuários', 'Quant. de empresas', 'Exibe no site'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Nome':
                return $this->name;
            case 'Valor':
                return \Helpers::currency($this->value);
            case 'Quant. de notas':
                return $this->qt_notes . ' nota(s)';
            case 'Quant. de usuários':
                return $this->qt_users . ' usuário(s)';
            case 'Quant. de empresas':
                return $this->qt_companies . ' empresa(s)';
            case 'Exibe no site':
                return ($this->public) ? 'Sim' : 'Não';
            default:
                return '';
        }
    }
}
