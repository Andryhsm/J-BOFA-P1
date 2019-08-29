<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableArtisan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users',function(Blueprint $table){
            // $table->string('first_name');
            // $table->string('postal_code')->nullable();
            //$table->string('ville')->nullable();
            //$table->integer('category_id')->unsigned()->nullable();
            //$table->string('enterprise')->nullable();
            // $table->integer('city_id')->unsigned()->nullable();
            // $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            // $table->foreign('city_id')->references('ville_id')->on('cities')->onDelete('cascade');
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
    }
}
