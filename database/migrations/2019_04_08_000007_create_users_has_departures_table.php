<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHasDeparturesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_has_departures';

    /**
     * Run the migrations.
     * @table users_has_departures
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('user_id');
            $table->integer('departure_id');
            $table->integer('player_id');

            $table->index(["user_id"], 'fk_users_has_departures_users1_idx');
            $table->index(["departure_id"], 'fk_users_has_departures_departures1_idx');
            $table->index(["player_id"], 'fk_users_has_departures_players1_idx');

            $table->foreign('user_id', 'fk_users_has_departures_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('player_id', 'fk_users_has_departures_players1_idx')
                ->references('id')->on('players')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('departure_id', 'fk_users_has_departures_departures1_idx')
                ->references('id')->on('departures')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
