<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupFeedComment extends Model
{
    protected $table = 'sc_group_feed_comment'; 
    protected $primaryKey = 'group_feed_comment_id';
    public $timestamps = false;

    public function group() {
        return $this->belongsTo(Group::class, 'group_id','group_id');
    }
}
