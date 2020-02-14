<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QAAnswer extends Model
{
    protected 	$table = 'sc_qa_answer';
    protected 	$primaryKey = 'qa_answer_id';
    public $timestamps = false;
    
    public function question()
    {
        return $this->belongsTo(QA::class,'qa_id');
    }

    public function userQuestion()
    {
        return $this->belongsTo(User::class,'who_added');
    }

    //3
    public function qaAnswerTags() {
        return $this->hasMany(QaAnswerTag::class, 'qa_answer_id');
    }

    public function qaAnswervotes() {
        return $this->hasMany(QaAnswerVote::class, 'qa_answer_id');
    }
}
