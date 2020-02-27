<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sc_lu', function (Blueprint $table) {
            $table->increments('lu_id')->unsigned(10);
            $table->string('categ_code',10);
            $table->foreign('categ_code')->references('categ_code')->on('sc_lu_categ');
            $table->string('code',10);
            $table->string('description',255);
            $table->string('status',3)->default('ACT');
            $table->integer('time_stamp')->unsigned(10);
            $table->tinyInteger('sort_order')->default(0);
            $table->string('translation_key',200);
            $table->foreign('translation_key')->references('translation_key')->on('sc_translation_key');
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
