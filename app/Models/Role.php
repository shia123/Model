<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected 	$table = 'sc_role';
    protected 	$primaryKey = 'role_id';
    public $timestamps = false;
    
    public function roleId(){
        return $this->hasMany(RolePermission::class,'role_id' );
    }
}
