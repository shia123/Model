<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserZoom extends Model
{
    protected $table = 'sc_user_zoom'; 
    protected $primaryKey = 'user_zoom_id';
    public $timestamps = false;
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function userField() {
        return $this->hasOne(UserField::class, 'zoom_account_id', 'user_zoom_id');
    }
}
