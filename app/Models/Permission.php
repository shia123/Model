<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected 	$table = 'sc_permission';
    protected 	$primaryKey = 'permission_id';
    public $timestamps = false;
    
    public function rolePermission(){
        return $this->hasMany(RolePermission::class,'permission_id' );
    }

    public function translations(){
        return $this->hasMany(Translation::class,'translation_key','translation_key' );
    }

    //rico
    public function adminPermissions() {
        return $this->hasMany(AdminPermission::class, 'permission_id','permission_id');
    }
}
