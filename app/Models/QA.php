<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QA extends Model
{
    protected 	$table = 'sc_qa';
    protected 	$primaryKey = 'qa_id';
    public $timestamps = false;
    
    public function qaQuestion()
    {
        return $this->hasMany(QAAnswer::class,'qa_id');
    }
    public function qaReaction()
    {
        return $this->hasMany(QAReaction::class,'qa_id');
    }
    public function qaTags()
    {
        return $this->hasMany(QATag::class,'qa_id');
    }

    //rico
    public function emailRecommendQa() {
        return $this->belongsTo(EmailRecommendQa::class, 'qa_id');
    }
 
    public function engagementEmails() {
        return $this->hasMany(EngagementEmail::class, 'qa_id');
    }

    //3
    public function qaCategs() {
        return $this->hasMany(QaCateg::class, 'qa_id');
    }

    public function qaReactions() {
        return $this->hasMany(QaReaction::class, 'qa_id');
    }

    //shia
    public function qaVotes() {
        return $this->hasMany(QAVote::class,'qa_id');
    }

}
