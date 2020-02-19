<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Specialist extends Model
{
    protected $table = 'sc_specialist';
    protected $primaryKey = 'specialist_id';
    public $timestamps = false;
    
    public function community() {

        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }
    
    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
