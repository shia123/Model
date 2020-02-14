<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unfriend extends Model
{
    protected 	$table = 'pf_unfriend';
    protected 	$primaryKey = 'unfriend_id';
    public $timestamps = false;


    public function unfriendList(){
        return $this->belongsTo(User::class,'unfriend_user_id');
    }
}
