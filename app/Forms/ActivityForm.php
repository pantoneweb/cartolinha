<?php

namespace App\Forms;

class ActivityForm extends MainForm
{
    public function buildForm()
    {
        $this->add('name', 'text', [
            'label' => 'Nome',
            'rules' => 'required'
        ])->add('score', 'number', [
            'label' => 'Pontuação',
            'rules' => "required"
        ]);

        parent::buildForm();
    }
}
