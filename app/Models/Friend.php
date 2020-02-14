<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected 	$table = 'pf_friend';
    protected 	$primaryKey = 'friend_id';
    public $timestamps = false;

    public function friendRequest(){
        return $this->belongsTo(FriendRequest::class ,'friend_user_id' , 'user_id' );
    }
    public function friends(){
        return $this->hasMany(User::class ,'user_id' , 'user_id' );
    }
}
