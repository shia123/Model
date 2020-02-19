<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedReaction extends Model
{
    protected 	$table = 'sc_feed_reaction';
    protected 	$primaryKey 	= 'feed_reaction_id';
    public $timestamps = false;
       
    public function user() {

        return $this->belongsTo(User::class,'user_id', 'user_id');
    }

    public function feeds() {
        
        return $this->belongsTo(Feed::class ,'feed_id','feed_id');
    }

    
    public function reaction() {
        
        return $this->belongsTo(Reaction::class ,'reaction_id','reaction_id');
    }
}
