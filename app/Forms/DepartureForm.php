<?php

namespace App\Forms;

use App\Forms\MainForm;
use App\Models\Account\Account;
use App\Models\Plan\Plan;

/**
 * Class PlanForm
 * @package App\Forms\User
 */
class DepartureForm extends MainForm
{
    /**
     * BUILD FORM
     */
    public function buildForm()
    {
        $accounts = Account::select(['id', 'name'])->get()->pluck('name', 'id')->all();

        $this->add('account_id', 'select', [
            'label' => 'Conta bancária',
            'choices' => $accounts,
            'rules' => 'required|in:' . implode(',', array_keys($accounts))
        ])->add('name', 'text', [
            'label' => 'Nome do plano',
            'rules' => "required|max:255",
            'attr' => ['maxlength' => '255']
        ])->add('value', 'text', [
            'label' => 'Valor',
            'rules' => "required",
            'attr' => ['class' => 'form-control currency']
        ])->add('qt_notes', 'number', [
            'label' => 'Quant. de Notas',
            'rules' => "required|integer"
        ])->add('qt_companies', 'number', [
            'label' => 'Quant. de Empresas',
            'rules' => "required|integer"
        ])->add('qt_users', 'number', [
            'label' => 'Quant. de Usuários',
            'rules' => "required|integer"
        ])->add('public', 'checkbox', [
            'label' => 'Exibe plano no site',
            'rules' => "required|boolean"
        ]);

        parent::buildForm();
    }
}
