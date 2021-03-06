<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'players';

    /**
     * Run the migrations.
     * @table players
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('team_id');
            $table->integer('position_id');
            $table->string('name');
            $table->string('photo');
            $table->timestamps();

            $table->index(["team_id"], 'fk_players_teams1_idx');
            $table->index(["position_id"], 'fk_players_positions1_idx');

            $table->foreign('team_id', 'fk_players_teams1_idx')
                ->references('id')->on('teams')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('position_id', 'fk_players_positions1_idx')
                ->references('id')->on('positions')
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
