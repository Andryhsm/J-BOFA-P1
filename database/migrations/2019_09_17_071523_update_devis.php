<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDevis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('view_project',function(Blueprint $table){
            $table->string('travaux')->nullable()->change();
            $table->string('batiment')->nullable()->change();
            $table->string('prestation')->nullable()->change();
            $table->binary('is_chauffe')->nullable()->change();
            $table->string('type_energie')->nullable()->change();
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
