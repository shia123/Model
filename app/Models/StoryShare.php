<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryShare extends Model
{
    protected $table = 'sc_story_share'; 
    protected $primaryKey = 'story_share_id';
    public $timestamps = false;

    public function story() {

        return $this->belongsTo(Story::class, 'story_id', 'story_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
