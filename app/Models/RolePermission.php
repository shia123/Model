<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected 	$table = 'sc_role_permission';
    protected 	$primaryKey = 'role_permission_id';
    public $timestamps = false;
    
    public function role() {
        return $this->belongsTo(Role::class, 'role_id', 'role_id' );
    }

    public function permission() {
        return $this->belongsTo(Permission::class, 'permission_id', 'permission_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
