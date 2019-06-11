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
            'email' => 'user1@mailinator.com',
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

        $team1 = Team::create(['id' => 1, 'name' => 'Corinthans']);
        $dados = [
            ['position_id' => '6', 'name' => 'Carile', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Boseli', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Clayson', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Vagner Love', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Sornoza', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Junior Urso', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Ralf', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Danilo Avelar', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Henrique', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Manoel', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Michel', 'photo' => ''],
            ['position_id' => '1', 'name' => 'Cassio', 'photo' => ''],
        ];
        foreach ($dados as $dado)
            $team1->players()->create($dado);

        $team2 = Team::create(['id' => 2, 'name' => 'São Paulo']);
        $dados = [
            ['position_id' => '6', 'name' => 'Cuca', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Pablo', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Gonzalo Carneiro', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Hudson', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Hermanes', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Antony', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Luan', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Reinaldo', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Igor Vinicius', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Anderson Martins', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Arboleda', 'photo' => ''],
            ['position_id' => '1', 'name' => 'Tiago Volpi', 'photo' => ''],
        ];
        foreach ($dados as $dado)
            $team2->players()->create($dado);

        $team3 = Team::create(['id' => 3, 'name' => 'Palmeiras']);
        $dados = [
            ['position_id' => '6', 'name' => 'Luis Felipe Scolari', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Borja', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Dudu', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Ricardo Goulart', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Gustavo Scarpa', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Diogo Barbosa', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Mayke', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Felipe Melo', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Lucas Lima', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Edu Dracena', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Antônio Carlos', 'photo' => ''],
            ['position_id' => '1', 'name' => 'Weverton', 'photo' => ''],
        ];
        foreach ($dados as $dado)
            $team3->players()->create($dado);

        $team4 = Team::create(['id' => 4, 'name' => 'Santos']);
        $dados = [
            ['position_id' => '6', 'name' => 'Sampaoli', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Soteldo', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Derlis Gonzalez', 'photo' => ''],
            ['position_id' => '5', 'name' => 'Jean Mota', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Diego pituca', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Carlos Sanchez', 'photo' => ''],
            ['position_id' => '4', 'name' => 'Orinho', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Gustavo Henrique', 'photo' => ''],
            ['position_id' => '2', 'name' => 'Alison', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Vitor Ferraz', 'photo' => ''],
            ['position_id' => '3', 'name' => 'Luiz Felipe', 'photo' => ''],
            ['position_id' => '1', 'name' => 'Vanderlei', 'photo' => ''],
        ];
        foreach ($dados as $dado)
            $team4->players()->create($dado);
    }
}
