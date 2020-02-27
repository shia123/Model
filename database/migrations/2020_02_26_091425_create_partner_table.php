<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sc_partner', function (Blueprint $table) {
            $table->smallIncrements('partner_id')->unsigned(5);
            $table->string('partner_name',255)->unique();
            $table->string('description',255)->nullable();
            $table->string('invite_email_translation_key',255);
            $table->foreign('invite_email_translation_key')->references('translation_key')->on('sc_translation_key');
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
