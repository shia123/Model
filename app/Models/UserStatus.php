<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    protected 	$table = 'pf_user_status';
    protected 	$primaryKey = 'status_id';
    public $timestamps = false;

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    //rico
    public function userStatusMedias() {
        
        return $this->hasMany(UserStatusMedia::class, 'user_status_id', 'status_id');
    }
}
