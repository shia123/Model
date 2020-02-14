<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InviteFriend extends Model
{
    protected $table = 'sc_invite_friend'; 
    protected $primaryKey = 'invite_friend_id';
    public $timestamps = false;
    
    public function community() {
        return $this->belongsTo(Community::class, 'community_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added');
    }
}
