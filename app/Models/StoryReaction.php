<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class StoryReaction extends Model
{
    protected $table = 'sc_story_reaction'; 
    protected $primaryKey = 'story_reaction_id';
    public $timestamps = false;
    
    public function story(){
        return $this->belongsTo(Story::class, 'story_id', 'story_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function reaction(){
        return $this->belongsTo(Reaction::class, 'reaction_id', 'reaction_id');
    }
}
