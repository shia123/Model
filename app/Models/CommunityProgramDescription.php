<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityProgramDescription extends Model
{
    protected $table = 'sc_community_program_description'; 
    protected $primaryKey = 'comunity_program_description_id';
    public $timestamps = false;
    
    public function community() {

        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function user() {

        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function translation() {
        
        return $this->belongsTo(Translation::class, 'translation_key','translation_key');
    }

  
}
