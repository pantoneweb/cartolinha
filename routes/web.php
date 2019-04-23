<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

//    \App\Models\Position::create(['id' => 1, 'name' => 'Goleiro']);
//    \App\Models\Position::create(['id' => 2, 'name' => 'Zagueiro']);
//    \App\Models\Position::create(['id' => 3, 'name' => 'Lateral']);
//    \App\Models\Position::create(['id' => 4, 'name' => 'Meia']);
//    \App\Models\Position::create(['id' => 5, 'name' => 'Atacante']);
//    \App\Models\Position::create(['id' => 6, 'name' => 'Tecnico']);



   /* App\Models\Player::create(['position_id' => '4', 'name' => 'Boselli', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Clayson', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Vagner Love', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Somoza', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Junior Urso', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Ralf', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Danilo Avelar', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Henrique', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Manoel', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Michel', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Cassio', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Pablo', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Gonzalo Carneiro', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Hudson', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Hermanes', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Antony', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Luan', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Reinaldo', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Igor Vinicius', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Anderson Martins', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Arboleda', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Tiago Volpi', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Borja', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Dudu', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Ricardo Goulart', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Felipe Pires(Gustavo Scarpa)', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Diogo Barbosa', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Felipe Melo', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Moisés (Bruno Henrique) Mayke', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Edu Dracena', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Antônio Carlos', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Weverton (Jailson)', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Henrique dourado', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Vitinho(Bruno Henrique)', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Arrascaeta', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Gabriel', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Piris da Motta', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Jean Lucas', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Trauco', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Rodrigo Caio', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Léo Duarte', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Rodinei', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'César', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Pedro Lucas', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Nico López', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Patrick', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Edenilson', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'William Pottker', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Rodrigo Dourado', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Iago', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Victor Cuesta', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Rodrigo Moledo', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Zeca', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Marcelo Lomba', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Soteldo', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Derlis Gonzalez', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Jean Mota', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Diego pituca', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Carlos Sanchez', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Orinho', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Gustavo Henrique', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Alison', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Vitor Ferraz', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Luiz Felipe', 'photo' => '']);
    App\Models\Player::create(['position_id' => '4', 'name' => 'Vanderlei', 'photo' => '']);*/

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('team', 'TeamController');
    Route::resource('player', 'PlayerController');
    Route::resource('departure', 'DepartureController');
    Route::resource('user', 'UserController');
    Route::resource('activity', 'ActivityController');
});
