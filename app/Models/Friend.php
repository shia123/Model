<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected 	$table = 'pf_friend';
    protected 	$primaryKey = 'friend_id';
    public $timestamps = false;

    public function user() {
        
        return $this->belongsTo(User::class ,'user_id' , 'user_id' );
    }
}
