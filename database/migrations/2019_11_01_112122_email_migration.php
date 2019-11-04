<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('email_mode',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('mode')->nullable();
            $table->binary('status')->nullable();
        });

        Schema::create('email',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('email_mode');
        Schema::dropIfExists('email');
    }
}
