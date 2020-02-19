<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupFeedMedia extends Model
{
    protected 	$table = 'sc_group_feed_media';
    protected 	$primaryKey= 'group_feed_media_id';
    public $timestamps = false;

    public function groupFeed() {
        
        return $this->belongsTo(GroupFeed::class,'group_feed_id','group_feed_id');
    }
}
