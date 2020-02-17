<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wellness extends Model
{
    protected $table = 'sc_wellness'; 
    protected $primaryKey = 'wellness_id';
    public $timestamps = false;
    
    public function community() {

        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function translation() {
        
        return $this->belongsTo(Translation::class,'translation_key','translation_key');
    }

    public function wellnessCategory() {

        return $this->belongsTo(WellnessCategory::class, 'wellnes_category_id', 'wellness_category_id');
    }

    public function wellnessReactions() {

        return $this->hasMany(WellnessReaction::class, 'wellness_id','wellness_id');
    }
    
}
