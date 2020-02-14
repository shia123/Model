<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupSignUp extends Model
{
    protected 	$table = 'sc_group_signup';
    protected 	$primaryKey = 'group_signup_id';
    public $timestamps = false;

    public function groupFeed() {
        return $this->belongsTo(Group::class,'group_id');
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id_from');
    }
}
