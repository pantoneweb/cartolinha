<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersHasActivitiesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'players_has_activities';

    /**
     * Run the migrations.
     * @table players_has_activities
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('player_id');
            $table->integer('activity_id');
            $table->integer('departure_id');

            $table->index(["activity_id"], 'fk_players_has_activities_activities1_idx');

            $table->index(["departure_id"], 'fk_players_has_activities_departures1_idx');

            $table->index(["player_id"], 'fk_players_has_activities_players1_idx');


            $table->foreign('player_id', 'fk_players_has_activities_players1_idx')
                ->references('id')->on('players')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('activity_id', 'fk_players_has_activities_activities1_idx')
                ->references('id')->on('activities')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('departure_id', 'fk_players_has_activities_departures1_idx')
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
