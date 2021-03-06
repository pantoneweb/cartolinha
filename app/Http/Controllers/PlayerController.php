<?php

namespace App\Http\Controllers;

use App\Forms\PlayerForm;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    private $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function index()
    {
        $data = $this->player->paginate(100);
        return view("player.index", compact('data'));
    }

    public function create()
    {
        $form = $this->createForm(PlayerForm::class, [
            'method' => 'POST',
            'url' => route('player.store')
        ]);

        $name = 'Jogadores';
        $route = 'player.index';
        $formTemplate = 'player.form';
        return view('partials.form-template', compact('name', 'route', 'form', 'formTemplate'));
    }

    public function store(Request $request)
    {
        $form = $this->createForm(PlayerForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $params = $request->all();
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $name = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/player', $name);
            $params['photo'] = $name;
        }

        $this->player->fill($params)->save();

        return redirect()->route('player.index');
    }

    public function edit($id)
    {
        $form = $this->createForm(PlayerForm::class, [
            'url' => route('player.update', ['id' => $id]),
            'model' => $this->player->find($id),
            'method' => 'PUT',
        ]);
        $name = 'Jogadores';
        $route = 'player.index';
        $formTemplate = 'player.form';
        return view('partials.form-template', compact('name', 'route', 'form', 'formTemplate'));
    }

    public function update(Request $request, $id)
    {
        $form = $this->createForm(PlayerForm::class, [
            'url' => route('player.update', ['id' => $id]),
            'model' => $this->player->find($id),
            'method' => 'PUT',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $params = $request->all();
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $name = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('public/player', $name);
            $params['photo'] = $name;
        }

        $this->player->fill($params)->save();

        return redirect()->route('player.index');
    }

    public function destroy($id)
    {
        //
    }
}
