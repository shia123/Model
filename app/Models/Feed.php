<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected 	$table = 'pf_feed';
    protected 	$primaryKey = 'feed_id';
    public $timestamps = false;

    public function feedReactions() {

        return $this->hasMany(FeedReaction::class,'feed_id','feed_id');
    }

    public function user() {

        return $this->belongsTo(User::class,'user_id','user_id');
    }

    
    
}
