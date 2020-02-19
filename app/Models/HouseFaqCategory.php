<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseFaqCategory extends Model
{
    protected $table = 'sc_house_faq_categ'; 
    protected $primaryKey = 'house_faq_categ_id';
    public $timestamps = false;
    
    public function community() {
        
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function houseFaqAnswers() {
        
        return $this->hasMany(HouseFaqAnswer::class, 'house_faq_categ_id', 'house_faq_categ_id');
    }

    public function houseFaqQuestions() {
        
        return $this->hasMany(HouseFaqQuestion::class, 'house_faq_categ_id', 'house_faq_categ_id');
    }

    public function translation() {
        
        return $this->belongsTo(Translation::class, 'translation_key', 'translation_key');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
