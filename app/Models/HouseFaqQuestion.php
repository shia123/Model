<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseFaqQuestion extends Model
{
    protected $table = 'sc_house_faq_question'; 
    protected $primaryKey = 'house_faq_question_id';
    public $timestamps = false;
    
    public function community() {
        
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function houseFaqCateg() {

        return $this->belongsTo(HouseFaqCategory::class, 'house_faq_categ_id', 'house_faq_categ_id');
    }
    
    public function houseFaqAnswer() {

        return $this->hasOne(HouseFaqAnswer::class, 'house_faq_question_id', 'house_faq_question_id');
    }

    public function translation() {

        return $this->belongsTo(Translation::class, 'translation_key', 'translation_key');
    }

    public function user() {

        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
