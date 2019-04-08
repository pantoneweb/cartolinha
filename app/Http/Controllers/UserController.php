<?php

namespace App\Http\Controllers;

use App\Forms\UserForm;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $data = $this->user->paginate();
        return view("user.index", compact('data'));
    }

    public function create()
    {
        $form = $this->createForm(UserForm::class, [
            'method' => 'POST',
            'url' => route('user.store')
        ]);

        return view('user.create', compact('form'));
    }

    public function store(Request $request)
    {
        $form = $this->createForm(UserForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        $this->user->fill($request->all())->save();

        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $form = $this->createForm(UserForm::class, [
            'url' => route('user.update', ['id' => $id]),
            'model' => $this->user->find($id),
            'method' => 'PUT',
        ]);
        return view('user.edit', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $form = $this->createForm(UserForm::class, [
            'url' => route('user.update', ['id' => $id]),
            'model' => $this->user->find($id),
            'method' => 'PUT',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $this->user->fill($request->all())->save();

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        //
    }
}
