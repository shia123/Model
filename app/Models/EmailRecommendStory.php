<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailRecommendStory extends Model
{
    protected $table = 'sc_email_recommend_story'; 
    protected $primaryKey = 'email_recommend_story_id';
    public $timestamps = false;

    public function user() {
        return $this->hasMany(User::class, 'user_id');
    }

    public function qa() {
        return $this->hasMany(Story::class, 'story_id');
    }
}
