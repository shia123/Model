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
        if (Schema::hasTable('sc_community')) {
            Schema::drop('sc_community');
        } 
            Schema::create('sc_community', function (Blueprint $table) {
                $table->smallIncrements('community_id')->unsigned(5);
                $table->string('community_code',255);
                $table->string('community_name',255)->unique();
                $table->mediumText('description')->nullable();
                $table->string('subdomain',100)->unique()->nullable();
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
