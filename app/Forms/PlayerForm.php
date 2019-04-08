<?php

namespace App\Forms;

/**
 * Class PlanForm
 * @package App\Forms\User
 */
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
        ])->add('photo', 'file', [
            'label' => 'Valor',
            'rules' => "required"
        ]);

        parent::buildForm();
    }
}
