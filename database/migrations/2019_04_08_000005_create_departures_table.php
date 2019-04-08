<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeparturesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'departures';

    /**
     * Run the migrations.
     * @table departures
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('home_team_id');
            $table->integer('guest_team_id');
            $table->integer('home_team_goals')->default('0');
            $table->integer('guest_team_goals')->default('0');
            $table->dateTime('datetime');
            $table->timestamps();

            $table->index(["guest_team_id"], 'fk_departures_teams1_idx');
            $table->index(["home_team_id"], 'fk_departures_teams_idx');

            $table->foreign('home_team_id', 'fk_departures_teams_idx')
                ->references('id')->on('teams')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('guest_team_id', 'fk_departures_teams1_idx')
                ->references('id')->on('teams')
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
