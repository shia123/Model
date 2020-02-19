<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryQuestion extends Model
{
    protected 	$table = 'sc_story_question';
    protected 	$primaryKey = 'story_question_id';
    public $timestamps = false;
    
    
    public function community() {

        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function translation() {
        
        return $this->hasMany(Translation::class, 'translation_key', 'translation_key');
    }
}
