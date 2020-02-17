<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    protected $table = 'sc_user_language'; 
    protected $primaryKey = 'user_language_id';
    public $timestamps = false;

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function translation() {
        
        return $this->hasOne(Translation::class, 'language_id', 'language_id');
    }
}
