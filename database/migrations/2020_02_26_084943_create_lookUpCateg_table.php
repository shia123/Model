<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookUpCategTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('sc_lu_categ', function (Blueprint $table) {
            $table->string('categ_code',10)->primary();
            $table->string('description',255);
            $table->string('status',3)->default('ACT');
            $table->integer('time_stamp')->unsigned(10);
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
