<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryQuestion extends Model
{
    protected 	$table = 'sc_story_question';
    protected 	$primaryKey = 'story_question_id';
    public $timestamps = false;
    
    //rico
    public function community(){
        return $this->belongsTo(Community::class, 'community_id');
    }

    public function translationKey(){
        return $this->belongsTo(TranslationKey::class, 'translation_key');
    }
}
