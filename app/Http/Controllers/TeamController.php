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

        $name = 'Times';
        $route = 'team.index';
        $formTemplate = 'team.form';
        return view('partials.form-template', compact('name', 'route', 'form', 'formTemplate'));
    }

    public function store(Request $request)
    {
        $form = $this->createForm(TeamForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $params = $request->all();
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $name = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/team', $name);
            $params['photo'] = $name;
        }

        $this->team->fill($params)->save();

        return redirect()->route('team.index');
    }

    public function edit($id)
    {
        $form = $this->createForm(TeamForm::class, [
            'url' => route('team.update', ['id' => $id]),
            'model' => $this->team->find($id),
            'method' => 'PUT',
        ]);

        $name = 'Times';
        $route = 'team.index';
        $formTemplate = 'team.form';
        return view('partials.form-template', compact('name', 'route', 'form', 'formTemplate'));
    }

    public function update(Request $request, $id)
    {
        $model = $this->team->find($id);
        $form = $this->createForm(TeamForm::class, [
            'url' => route('team.update', ['id' => $id]),
            'model' => $model,
            'method' => 'PUT',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $params = $request->all();
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $name = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/team', $name);
            $params['photo'] = $name;
        }

        $model->fill($params)->save();

        return redirect()->route('team.index');
    }

    public function destroy($id)
    {
        //
    }
}
