<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailContent extends Model
{
    //
    protected 	$table = 'sc_email_content';
    protected $primaryKey='email_content_id';
    public $timestamps = false;

    public function translation() {
        return $this->belongsTo(Translation::class,'email_content_translation_key','translation_key');
    }

    public function community() {
        return $this->belongsTo(Community::class,'community_id','community_id');
    }

    public function user() {
        return $this->belongsTo(User::class,'who_added','user_id');
    }
}

