<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatusMedia extends Model
{
    protected $table = 'sc_user_status_media'; 
    protected $primaryKey = 'user_status_media_id';
    public $timestamps = false; 
    
    public function photo() {

        return $this->hasOne(Photo::class, 'photo_id', 'photo_id');
    }

    public function userStatus() {
        
        return $this->belongsTo(UserStatus::class, 'user_status_id', 'status_id');
    }

}
