<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wellness extends Model
{
    protected $table = 'sc_wellness'; 
    protected $primaryKey = 'wellness_id';
    public $timestamps = false;
    
    public function Community() {
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function translationKey(){
        return $this->belongsTo(TranslationKey::class);
    }

    public function wellnessCategory(){
        return $this->belongsTo(WellnessCategory::class, 'wellnes_category_id', 'wellness_category_id');
    }

    public function wellnessReactions(){
        return $this->hasMany(WellnessReaction::class, 'wellness_id');
    }
    
}
