<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPasswordReset extends Model
{
    protected 	$table = 'sc_user_password_reset';
    protected 	$primaryKey = 'user_password_reset_id';
    public $timestamps = false;

    public function confirmation() {
        return $this->belongsTo(Confirmation::class,'confirmation_id','confirmation_id');
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    
   
}
