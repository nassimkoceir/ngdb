<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgdbSocialAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngdb_social_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index()->nullable();
            $table->string('provider');
            $table->string('provider_id');
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
        Schema::dropIfExists('ngdb_social_accounts');
    }
}
