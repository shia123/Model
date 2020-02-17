<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryMedia extends Model
{
    protected $table = 'sc_story_media';
    protected $primaryKey = 'story_media_id';
    public $timestamps = false;

    public function story() {
        
        return $this->belongsTo(Story::class, 'story_id', 'story_id');
    }
    
}
