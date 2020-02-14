<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'sc_user_role'; 
    protected $primaryKey = 'user_role_id';
    public $timestamps = false;
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
