<?php

namespace App\Forms;

use App\Models\Position;

class PlayerForm extends MainForm
{
    /**
     * BUILD FORM
     */
    public function buildForm()
    {
        $this->add('name', 'text', [
            'label' => 'Nome',
            'rules' => "required|max:255",
            'attr' => ['maxlength' => '255']
        ])->add('position_id', 'select', [
            'label' => 'Posição',
            'rules' => "required",
            'choices' => Position::all()->pluck('id', 'title')->all()
        ])->add('photo', 'file', [
            'label' => 'Foto',
            'rules' => "required"
        ]);

        parent::buildForm();
    }
}
