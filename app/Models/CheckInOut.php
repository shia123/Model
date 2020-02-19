<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckInOut extends Model
{
    protected $table = 'sc_check_in_out'; 
    protected $primaryKey = 'check_in_out_id';
    public $timestamps = false;
    
    public function community() {
        
        return $this->belongsTo(Community::class, 'community_id','community_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
