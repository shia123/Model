<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected 	$table = 'sc_role';
    protected 	$primaryKey = 'role_id';
    public $timestamps = false;
    
    public function community() {
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function translations() {
        return $this->hasMany(Translation::class, 'translation_key', 'translation_key');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function rolePermissions(){
        return $this->hasMany(RolePermission::class, 'role_id', 'role_id');
    }
}
