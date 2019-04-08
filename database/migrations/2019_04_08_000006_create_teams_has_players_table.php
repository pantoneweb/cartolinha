<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsHasPlayersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'teams_has_players';

    /**
     * Run the migrations.
     * @table teams_has_players
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('team_id');
            $table->integer('player_id');
            $table->timestamps();

            $table->index(["player_id"], 'fk_teams_has_players_players1_idx');
            $table->index(["team_id"], 'fk_teams_has_players_teams1_idx');

            $table->foreign('team_id', 'fk_teams_has_players_teams1_idx')
                ->references('id')->on('teams')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('player_id', 'fk_teams_has_players_players1_idx')
                ->references('id')->on('players')
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
