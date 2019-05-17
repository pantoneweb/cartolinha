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
        Team::create(['id' => 1, 'name' => 'Corinthans']);
        Team::create(['id' => 2, 'name' => 'São Paulo']);
        Team::create(['id' => 3, 'name' => 'Palmeiras']);
        Team::create(['id' => 4, 'name' => 'Santos']);

        Position::create(['id' => 1, 'name' => 'Goleiro']);
        Position::create(['id' => 2, 'name' => 'Zagueiro']);
        Position::create(['id' => 3, 'name' => 'Lateral']);
        Position::create(['id' => 4, 'name' => 'Meia']);
        Position::create(['id' => 5, 'name' => 'Atacante']);
        Position::create(['id' => 6, 'name' => 'Tecnico']);

        Activity::create(['name' => 'Teste 1', 'score' => '3']);
        Activity::create(['name' => 'Teste 1', 'score' => '-5']);
        Activity::create(['name' => 'Teste 1', 'score' => '5']);
        Activity::create(['name' => 'Teste 1', 'score' => '2']);
        Activity::create(['name' => 'Teste 1', 'score' => '-1']);
        Activity::create(['name' => 'Teste 1', 'score' => '10']);
        Activity::create(['name' => 'Teste 1', 'score' => '-9']);

        Player::create(['team_id' => 1, 'position_id' => '1', 'name' => 'Boselli', 'photo' => '']);
        Player::create(['team_id' => 2, 'position_id' => '2', 'name' => 'Clayson', 'photo' => '']);
        Player::create(['team_id' => 3, 'position_id' => '3', 'name' => 'Vagner Love', 'photo' => '']);
        Player::create(['team_id' => 4, 'position_id' => '4', 'name' => 'Somoza', 'photo' => '']);
        Player::create(['team_id' => 1, 'position_id' => '5', 'name' => 'Junior Urso', 'photo' => '']);
        Player::create(['team_id' => 2, 'position_id' => '6', 'name' => 'Ralf', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Danilo Avelar', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Henrique', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Manoel', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Michel', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Cassio', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Pablo', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Gonzalo Carneiro', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Hudson', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Hermanes', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Antony', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Luan', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Reinaldo', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Igor Vinicius', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Anderson Martins', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Arboleda', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Tiago Volpi', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Borja', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Dudu', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Ricardo Goulart', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Felipe Pires(Gustavo Scarpa)', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Diogo Barbosa', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Felipe Melo', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Moisés (Bruno Henrique) Mayke', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Edu Dracena', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Antônio Carlos', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Weverton (Jailson)', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Henrique dourado', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Vitinho(Bruno Henrique)', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Arrascaeta', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Gabriel', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Piris da Motta', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Jean Lucas', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Trauco', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Rodrigo Caio', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Léo Duarte', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Rodinei', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'César', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Pedro Lucas', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Nico López', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Patrick', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Edenilson', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'William Pottker', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Rodrigo Dourado', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Iago', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Victor Cuesta', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Rodrigo Moledo', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Zeca', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Marcelo Lomba', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Soteldo', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Derlis Gonzalez', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Jean Mota', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Diego pituca', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Carlos Sanchez', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Orinho', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Gustavo Henrique', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Alison', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Vitor Ferraz', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Luiz Felipe', 'photo' => '']);
//        Player::create(['position_id' => '4', 'name' => 'Vanderlei', 'photo' => '']);

    }
}
