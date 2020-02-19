<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailRecommendStory extends Model
{
    protected $table = 'sc_email_recommend_story'; 
    protected $primaryKey = 'email_recommend_story_id';
    public $timestamps = false;

    public function user() {

        return $this->belongsTo(User::class, 'user_id','user_id');
    }

    public function story() {
        
        return $this->belongsTo(Story::class, 'story_id','story_id');
    }
}
