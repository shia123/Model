<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected 	$table = 'pf_feed';
    protected 	$primaryKey = 'feed_id';
    public $timestamps = false;

    public function reactions(){
        return $this->hasMany(FeedReaction::class,'feed_id');
    }
    
}
