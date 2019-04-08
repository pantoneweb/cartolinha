<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

/**
 * Class MainForm
 * @package App\Forms
 */
class MainForm extends Form
{
    public function buildForm()
    {
        $this->add('submit', 'submit', [
            'attr' => ['class' => 'btn btn-info'],
            'label' => 'Salvar'
        ]);
        $this->add('cancel', 'button', [
            'attr' => [
                'class' => 'btn btn-default',
                'onclick' => 'javascript: ((!confirm("Deseja cancelar esta operação?")) || window.history.back());',
            ],
            'label' => 'Cancelar'
        ]);
    }
}