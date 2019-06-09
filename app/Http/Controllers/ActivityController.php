<?php

namespace App\Http\Controllers;

use App\Forms\ActivityForm;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    private $activity;

    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }

    public function index()
    {
        $data = $this->activity->paginate();
        return view("activity.index", compact('data'));
    }

    public function create()
    {
        $form = $this->createForm(ActivityForm::class, [
            'method' => 'POST',
            'url' => route('activity.store')
        ]);
        $name = 'Atividade de Jogadores';
        $route = 'activity.index';
        $formTemplate = 'activity.form';
        return view('partials.form-template', compact('name', 'route', 'form', 'formTemplate'));
    }

    public function store(Request $request)
    {
        $form = $this->createForm(ActivityForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        $this->activity->fill($request->all())->save();

        return redirect()->route('activity.index');
    }

    public function edit($id)
    {
        $form = $this->createForm(ActivityForm::class, [
            'url' => route('activity.update', ['id' => $id]),
            'model' => $this->activity->find($id),
            'method' => 'PUT',
        ]);
        $name = 'Atividade de Jogadores';
        $route = 'activity.index';
        $formTemplate = 'activity.form';
        return view('partials.form-template', compact('name', 'route', 'form', 'formTemplate'));
    }

    public function update(Request $request, $id)
    {
        $form = $this->createForm(ActivityForm::class, [
            'url' => route('activity.update', ['id' => $id]),
            'model' => $this->activity->find($id),
            'method' => 'PUT',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $this->activity->fill($request->all())->save();

        return redirect()->route('activity.index');
    }

    public function destroy($id)
    {
        //
    }
}
