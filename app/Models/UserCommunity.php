<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCommunity extends Model
{

    protected 	$table = 'sc_user_community';
    protected 	$primaryKey = 'user_community_id';
    public $timestamps = false;

    public function community() {

        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
