<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryComment extends Model
{
    protected 	$table = 'sc_story_comment';
    protected 	$primaryKey = 'story_comment_id';
    public $timestamps = false;
    
    //rico
    public function story(){
        return $this->belongsTo(Story::class, 'story_id', 'story_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
