<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WellnessCategory extends Model
{
    protected $table = 'sc_wellness_category'; 
    protected $primaryKey = 'wellness_category_id';
    public $timestamps = false;
    
    public function Community(){
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function icon(){
        return $this->hasOne(Icon::class, 'icon_id', 'icon_id');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function wellnesses(){
        return $this->hasmany(Wellness::class, 'wellness_category_id');
    }

    public function translationKey(){
        return $this->belongsTo(TranslationKey::class);
    }

}
