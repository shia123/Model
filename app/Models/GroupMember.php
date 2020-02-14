<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    //
    protected 	$table = 'sc_group_member';
    protected 	$primaryKey = 'group_member_id';
    public $timestamps = false;

    public function group() {
        return $this->belongsTo(Group::class,'group_id','group_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

}
