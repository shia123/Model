<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupFeed extends Model
{
    protected 	$table = 'sc_group_feed';
    protected $primaryKey= 'group_feed_id';
    public $timestamps = false;

    public function groupFeedMedias() {
        return $this->hasMany(GroupFeedMedia::class);
    }

  
}
