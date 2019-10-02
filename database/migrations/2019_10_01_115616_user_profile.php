<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_profil',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->binary('gender')->nullable();
            $table->string('address');
            $table->string('siret');
            $table->string('creation');
            $table->string('metier');
            $table->string('portable')->nullable();
            $table->string('fax')->nullable();
            $table->string('site')->nullable();
            $table->string('rge')->nullable();
        });

        Schema::table('user_profil',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('user_profil');
    }
}
