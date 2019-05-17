<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Departure;
use App\Models\Team;
use Illuminate\Http\Request;

class DepartureController extends Controller
{
    private $departure;

    public function __construct(Departure $departure)
    {
        $this->departure = $departure;
    }

    public function index()
    {
        $data = $this->departure->paginate();
        return view("departure.index", compact('data'));
    }

    public function create()
    {
//        $form = $this->createForm(DepartureForm::class, [
//            'method' => 'POST',
//            'url' => route('departure.store')
//        ]);

        $x = 0;
        $teams = Team::with('players')->inRandomOrder()->get();
        $activities = Activity::get();
        return view('departure.create', compact('teams', 'activities', 'x'));
    }

    public function store(Request $request)
    {
        $form = $this->createForm(DepartureForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        $this->departure->fill($request->all())->save();

        return redirect()->route('departure.index');
    }

    public function edit($id)
    {
        $form = $this->createForm(DepartureForm::class, [
            'url' => route('departure.update', ['id' => $id]),
            'model' => $this->departure->find($id),
            'method' => 'PUT',
        ]);
        return view('departure.edit', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $form = $this->createForm(DepartureForm::class, [
            'url' => route('departure.update', ['id' => $id]),
            'model' => $this->departure->find($id),
            'method' => 'PUT',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $this->departure->fill($request->all())->save();

        return redirect()->route('departure.index');
    }

    public function destroy($id)
    {
        //
    }
}
