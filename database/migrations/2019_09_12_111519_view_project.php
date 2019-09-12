<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('view_project',function(Blueprint $table){
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('batiment');
            $table->string('travaux');
            $table->string('prestation');
            $table->string('type_energie');
            $table->string('category_type1');
            $table->string('category_type2');
            $table->string('phone');
            $table->string('email');
            $table->string('hour');
            $table->binary('is_chauffe');
            $table->binary('gender');
            $table->timestamps();
        });

        // Schema::table('view_project',function(Blueprint $table)
        // {
        //     $table->foreign('category_id')->references('id')->on('category')->onDelete('set null');
        //     $table->foreign('country_id')->references('ville_id')->on('cities')->onDelete('set null');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('view_project');
    }
}
