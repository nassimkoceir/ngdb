<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngdb_games', function (Blueprint $table) {
            $table->id();
            $table->string('igdb_id');
            $table->string('name');
            $table->string('img');
            $table->string('plateform');
            $table->string('url');
            $table->boolean('new');
            $table->boolean('coop');
            $table->string('mate');
            $table->boolean('dlc');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ngdb_games');
    }
}
