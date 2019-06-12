<?php

use App\Models\Position;
use App\Models\Team;
use App\Models\Activity;
use App\Models\Player;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Administrador',
            'email' => 'djras_rafael@hotmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'score' => 100
        ]);

        \App\User::create([
            'name' => 'Rafael Silva',
            'email' => 'user1user1@mailinator.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'score' => 100
        ]);

        \App\User::create([
            'name' => 'Rafael Antonio',
            'email' => 'user2@mailinator.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'score' => 100
        ]);

        \App\User::create([
            'name' => 'Idenando',
            'email' => 'user3@mailinator.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'score' => 100
        ]);

        \App\User::create([
            'name' => 'Nadia',
            'email' => 'user4@mailinator.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'score' => 100
        ]);

        \App\User::create([
            'name' => 'Alex',
            'email' => 'user5@mailinator.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'score' => 100
        ]);

        \App\User::create([
            'name' => 'Mateus',
            'email' => 'user6@mailinator.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'score' => 100
        ]);


        Position::create(['id' => 1, 'name' => 'Goleiro']);
        Position::create(['id' => 2, 'name' => 'Zagueiro']);
        Position::create(['id' => 3, 'name' => 'Lateral']);
        Position::create(['id' => 4, 'name' => 'Meia']);
        Position::create(['id' => 5, 'name' => 'Atacante']);
        Position::create(['id' => 6, 'name' => 'Tecnico']);

        Activity::create(['name' => 'Gol', 'score' => '8']);
        Activity::create(['name' => 'Assistencia', 'score' => '5']);
        Activity::create(['name' => 'Cartão amarelo', 'score' => '-2']);
        Activity::create(['name' => 'Cartão Vermelho', 'score' => '-5']);

        $team1 = Team::create(['id' => 1, 'name' => 'Corinthans', 'photo' => 'cor/logo.png']);
        $dados = [
            ['position_id' => '6', 'name' => 'Carile', 'photo' => 'cor/cariele.png'],
            ['position_id' => '5', 'name' => 'Boseli', 'photo' => 'cor/mauro.png'],
            ['position_id' => '5', 'name' => 'Clayson', 'photo' => 'cor/clayson.png'],
            ['position_id' => '5', 'name' => 'Vagner Love', 'photo' => 'cor/vagner.png'],
            ['position_id' => '4', 'name' => 'Sornoza', 'photo' => 'cor/sornoza.png'],
            ['position_id' => '4', 'name' => 'Junior Urso', 'photo' => 'cor/junior.png'],
            ['position_id' => '4', 'name' => 'Ralf', 'photo' => 'cor/ralf.png'],
            ['position_id' => '3', 'name' => 'Danilo Avelar', 'photo' => 'cor/danilo.png'],
            ['position_id' => '2', 'name' => 'Henrique', 'photo' => 'cor/henrique.png'],
            ['position_id' => '2', 'name' => 'Manoel', 'photo' => 'cor/manoel.png'],
            ['position_id' => '3', 'name' => 'Michel', 'photo' => 'cor/michel.png'],
            ['position_id' => '1', 'name' => 'Cassio', 'photo' => 'cor/cassio.png'],
        ];
        foreach ($dados as $dado)
            $team1->players()->create($dado);

        $team2 = Team::create(['id' => 2, 'name' => 'São Paulo', 'photo' => 'sp/logo.png']);
        $dados = [
            ['position_id' => '6', 'name' => 'Cuca', 'photo' => 'sp/cuca.png'],
            ['position_id' => '5', 'name' => 'Pablo', 'photo' => 'sp/pablo.png'],
            ['position_id' => '5', 'name' => 'Gonzalo Carneiro', 'photo' => 'sp/gonzalo.png'],
            ['position_id' => '4', 'name' => 'Hudson', 'photo' => 'sp/hudson.png'],
            ['position_id' => '4', 'name' => 'Hermanes', 'photo' => 'sp/hernanes.png'],
            ['position_id' => '5', 'name' => 'Antony', 'photo' => 'sp/antony.png'],
            ['position_id' => '4', 'name' => 'Luan', 'photo' => 'sp/luan.png'],
            ['position_id' => '3', 'name' => 'Reinaldo', 'photo' => 'sp/reinaldo.png'],
            ['position_id' => '3', 'name' => 'Igor Vinicius', 'photo' => 'sp/igor.png'],
            ['position_id' => '2', 'name' => 'Anderson Martins', 'photo' => 'sp/anderson.png'],
            ['position_id' => '2', 'name' => 'Arboleda', 'photo' => 'sp/arboleda.png'],
            ['position_id' => '1', 'name' => 'Tiago Volpi', 'photo' => 'sp/tiago.png'],
        ];
        foreach ($dados as $dado)
            $team2->players()->create($dado);

        $team3 = Team::create(['id' => 3, 'name' => 'Palmeiras', 'photo' => 'pal/logo.png']);
        $dados = [
            ['position_id' => '6', 'name' => 'Luis Felipe Scolari', 'photo' => 'pal/luis.png'],
            ['position_id' => '5', 'name' => 'Borja', 'photo' => 'pal/borja.png'],
            ['position_id' => '5', 'name' => 'Dudu', 'photo' => 'pal/dudu.png'],
            ['position_id' => '5', 'name' => 'Ricardo Goulart', 'photo' => 'pal/ricardo.png'],
            ['position_id' => '4', 'name' => 'Gustavo Scarpa', 'photo' => 'pal/gustavo.png'],
            ['position_id' => '3', 'name' => 'Diogo Barbosa', 'photo' => 'pal/diogo.png'],
            ['position_id' => '3', 'name' => 'Mayke', 'photo' => 'pal/mayke.png'],
            ['position_id' => '4', 'name' => 'Felipe Melo', 'photo' => 'pal/felipe.png'],
            ['position_id' => '4', 'name' => 'Lucas Lima', 'photo' => 'pal/lucas.png'],
            ['position_id' => '2', 'name' => 'Edu Dracena', 'photo' => 'pal/edu.png'],
            ['position_id' => '2', 'name' => 'Antônio Carlos', 'photo' => 'pal/anto.png'],
            ['position_id' => '1', 'name' => 'Weverton', 'photo' => 'pal/weverton.png'],
        ];
        foreach ($dados as $dado)
            $team3->players()->create($dado);

        $team4 = Team::create(['id' => 4, 'name' => 'Santos', 'photo' => 'san/logo.png']);
        $dados = [
            ['position_id' => '6', 'name' => 'Sampaoli', 'photo' => 'san/sampaoli.png'],
            ['position_id' => '5', 'name' => 'Soteldo', 'photo' => 'san/yeferson.png'],
            ['position_id' => '5', 'name' => 'Derlis Gonzalez', 'photo' => 'san/derlis.png'],
            ['position_id' => '5', 'name' => 'Jean Mota', 'photo' => 'san/jean.png'],
            ['position_id' => '4', 'name' => 'Diego pituca', 'photo' => 'san/diego.png'],
            ['position_id' => '4', 'name' => 'Carlos Sanchez', 'photo' => 'san/carlos.png'],
            ['position_id' => '4', 'name' => 'Orinho', 'photo' => 'san/orinho.png'],
            ['position_id' => '2', 'name' => 'Gustavo Henrique', 'photo' => 'san/gustavo.png'],
            ['position_id' => '2', 'name' => 'Alison', 'photo' => 'san/alisson.png'],
            ['position_id' => '3', 'name' => 'Vitor Ferraz', 'photo' => 'san/victor.png'],
            ['position_id' => '3', 'name' => 'Luiz Felipe', 'photo' => 'san/luiz.png'],
            ['position_id' => '1', 'name' => 'Vanderlei', 'photo' => 'san/vanderley.png'],
        ];
        foreach ($dados as $dado)
            $team4->players()->create($dado);
    }
}
