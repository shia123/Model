<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryFeatured extends Model
{
    protected $table = 'sc_story_featured';
    protected $primaryKey = 'story_featured_id';
    public $timestamps = false;
    
    public function story(){
        return $this->belongsTo(Story::class, 'story_id', 'story_id');
    }

    public function community(){
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
