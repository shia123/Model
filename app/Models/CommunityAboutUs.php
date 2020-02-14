<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityAboutUs extends Model
{
    protected $table = 'sc_community_about_us'; 
    protected $primaryKey = 'about_us_id';
    public $timestamps = false;
   
    public function community() {
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function translationKey() {
        return $this->belongsTo(TranslationKey::class, 'translation_key');
    }
}
