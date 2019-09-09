<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemoin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temoin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('titre');
            $table->text('description');
            $table->integer('category_id')->unsigned();
            $table->binary('status');
            $table->timestamps();
        });

        // Schema::table('temoin',function(Blueprint $table){
        //     $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temoin');
    }
}
