<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupFeed extends Model
{
    protected 	$table = 'sc_group_feed';
    protected $primaryKey= 'group_feed_id';
    public $timestamps = false;

    public function groupFeedMedias() {

        return $this->hasMany(GroupFeedMedia::class,'group_feed_id','group_feed_id');
    }

    public function group() {

        return $this->belongsTo(Group::class,'group_id','group_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class,'user_id', 'user_id');
    } 
}
