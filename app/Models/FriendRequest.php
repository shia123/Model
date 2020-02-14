<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    protected 	$table = 'pf_friend_request';
    protected 	$primaryKey = 'user_id';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    
}
