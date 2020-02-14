<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    //
    protected $table = 'sc_admin_permission'; 
    protected $primaryKey = 'admin_permission_id';
    public $timestamps = false;

    public function permission() {
        return $this->belongsTo(Permission::class, 'permission_id','permission_id');
    }
    public function user() {
        return $this->belongsTo(User::class , 'who_added', 'user_id');
    }
}
