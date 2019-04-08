<?php

namespace App\Http\Controllers;

use App\Forms\TeamForm;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    public function index()
    {
        $data = $this->team->paginate();
        return view("team.index", compact('data'));
    }

    public function create()
    {
        $form = $this->createForm(TeamForm::class, [
            'method' => 'POST',
            'url' => route('team.store')
        ]);

        return view('team.create', compact('form'));
    }

    public function store(Request $request)
    {
        $form = $this->createForm(TeamForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        $this->team->fill($request->all())->save();

        return redirect()->route('team.index');
    }

    public function edit($id)
    {
        $form = $this->createForm(TeamForm::class, [
            'url' => route('team.update', ['id' => $id]),
            'model' => $this->team->find($id),
            'method' => 'PUT',
        ]);
        return view('team.edit', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $form = $this->createForm(TeamForm::class, [
            'url' => route('team.update', ['id' => $id]),
            'model' => $this->team->find($id),
            'method' => 'PUT',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $this->team->fill($request->all())->save();

        return redirect()->route('team.index');
    }

    public function destroy($id)
    {
        //
    }
}
