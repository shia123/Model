<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserField extends Model
{
    protected 	$table = 'pf_user_field';
    protected 	$primaryKey = 'user_id';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class ,'user_id' );
    }
}
