<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sc_community', function (Blueprint $table) {
            $table->increments()->smallInteger('community_id')->primary()->unsigned(5);
            $table->string('community_code',255);
            $table->string('community_name',255)->unique();
            $table->string('description',255)->nullable();
            $table->mediumText('subdomain',100)->unique()->nullable();
            $table->smallInteger('partner_id')->unsigned(5);
            $table->foreign('partner_id')->references('partner_id')->on('sc_partner');
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
