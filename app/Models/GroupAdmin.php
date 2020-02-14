<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupAdmin extends Model
{
    protected 	$table = 'sc_group_admin';
    protected 	$primaryKey= 'group_admin_id';
    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id');
    }

}
