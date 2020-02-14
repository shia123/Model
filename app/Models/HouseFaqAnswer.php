<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseFaqAnswer extends Model
{
    protected $table = 'sc_house_faq_answer'; 
    protected $primaryKey = 'house_faq_answer_id';
    public $timestamps = false;

    public function community() {
        return $this->belongsTo(Community::class, 'community_id');
    }

    public function houseFaqCateg(){
        return $this->belongsTo(HouseFaqCategory::class, 'house_faq_categ_id');
    }

    public function houseFaqAnswer(){
        return $this->belongsTo(HouseFaqQuestion::class, 'house_faq_question_id');
    }

    public function translationKey() {
        return $this->belongsTo(TranslationKey::class, 'translation_key');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
