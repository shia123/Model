<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryTag extends Model
{
    protected $table = 'sc_story_tag'; 
    protected $primaryKey = 'story_tag_id';
    public $timestamps = false;

    public function story() {

        return $this->belongsTo(Story::class, 'story_id', 'story_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
