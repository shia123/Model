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

        //c
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


// SELECT
//     pd.comunity_program_description_id,
//     (SELECT
//             t.translation_text
//         FROM
//             sc_translation t
//         WHERE
//             t.translation_key = pd.translation_key
// AND t.language_id = 'es') title,
// (SELECT
//             DISTINCT(t.translation_text)
//         FROM
//             sc_translation t
//         WHERE
//            t.translation_key = pd.translation_key_content
// AND t.language_id = 'en') description,
//         'en' language_id,
//         pd.who_added
// FROM
//     sc_community_program_description pd,
//     sc_translation_key t
// WHERE
// pd.translation_key = t.translation_key;