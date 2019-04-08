<?php

namespace App\Forms;

class UserForm extends MainForm
{
    /**
     * BUILD FORM
     */
    public function buildForm()
    {
        $this->add('name', 'text', [
            'label' => 'Nome',
            'rules' => 'required'
        ])->add('email', 'email', [
            'label' => 'E-mail',
            'rules' => "required|email|max:255",
            'attr' => ['maxlength' => '255']
        ]);

        parent::buildForm();
    }
}
