<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    //
    protected 	$table = 'sc_confirmation';
    protected 	$primaryKey = 'confirmation_id';
    public $timestamps = false;

    public function userRegistration(){
        return $this->hasOne(UserRegistration::class,'confirmation_id','confirmation_id');
    }

    public function userPasswordReset(){
        return $this->hasOne(UserPasswordReset::class,'confirmation_id','confirmation_id');
    }

    //3


}
