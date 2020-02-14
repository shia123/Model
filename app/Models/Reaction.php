<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected 	$table = 'sc_qa_reaction';
    protected 	$primaryKey = 'reaction_id';
    public $timestamps = false;
    
    public function qaReactions()
    {
        return $this->hasMany(QAReaction::class,'reaction_id');
    }

    public function resourceReactions()
    {
        return $this->hasMany(ResourceReaction::class,'reaction_id');
    }

    //rico
    public function storyReaction(){
        return $this->hasMany(StoryReaction::class, 'reaction_id');
    }

    public function wellnessReaction(){
        return $this->belongsTo(WellnessReaction::class, 'reaction_id');
    }

}
