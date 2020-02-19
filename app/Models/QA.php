<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QA extends Model
{
    protected 	$table = 'sc_qa';
    protected 	$primaryKey = 'qa_id';
    public $timestamps = false;
    
    public function community() {
        
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

    public function qaReactions() {
        
        return $this->hasMany(QAReaction::class, 'qa_id', 'qa_id');
    }

    public function qaTags() {
        
        return $this->hasMany(QATag::class, 'qa_id', 'qa_id');
    }

    public function qaCategs() {
        
        return $this->hasMany(QaCateg::class, 'qa_id', 'qa_id');
    }

    public function qaVotes() {
        
        return $this->hasMany(QAVote::class, 'qa_id', 'qa_id');
    }

    public function qaAnswers() {
        
        return $this->hasMany(QAAnswer::class, 'qa_id', 'qa_id');
    }
   
    public function emailRecommendResources() {
        
        return $this->hasMany(EmailRecommendResource::class, 'qa_id','qa_id');
    }

    public function emailRecommendQas() {
        
        return $this->hasMany(EmailRecommendQa::class, 'qa_id','qa_id');
    }
 
    public function engagementEmails() {
        
        return $this->hasMany(EngagementEmail::class, 'qa_id', 'qa_id');
    }

}
