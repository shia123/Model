<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('sc_translation', function (Blueprint $table) {
            $table->increments('translation_id')->unsigned(10);
            $table->string('translation_key',250);
            $table->foreign('translation_key')->references('translation_key')->on('sc_translation_key');
            $table->char('language_id',2)->default('en');
            $table->text('translation_text');
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
