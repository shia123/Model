<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WellnessCategory extends Model
{
    protected $table = 'sc_wellness_category'; 
    protected $primaryKey = 'wellness_category_id';
    public $timestamps = false;
    
    public function community() {
        
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function icon() {
        
        return $this->hasOne(Icon::class, 'icon_id', 'icon_id');
        
    }
    
    public function user() {

        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function wellnesses() {

        return $this->hasMany(Wellness::class, 'wellness_category_id','wellness_category_id');
    }

    public function translation() {

        return $this->belongsTo(Translation::class,'translation_key','translation_key');
    }

}
