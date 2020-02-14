<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected 	$table = 'sc_reaction';
    protected 	$primaryKey = 'reaction_id';
    public $timestamps = false;
    
    public function qaReactions() {
        return $this->belongsTo(QAReaction::class, 'reaction_id', 'reaction_id');
    }

    public function resourceReactions()
    {
        return $this->hasMany(ResourceReaction::class,'reaction_id','reaction_id');
    }

    public function feedReactions()
    {
        return $this->hasMany(FeedReaction::class,'reaction_id','reaction_id');
    }
    //rico
    public function storyReactions(){
        return $this->hasMany(StoryReaction::class, 'reaction_id','reaction_id');
    }

    public function wellnessReactions(){
        return $this->hasMany(WellnessReaction::class, 'reaction_id','reaction_id');
    }

}
