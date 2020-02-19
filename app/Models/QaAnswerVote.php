<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QaAnswerVote extends Model
{
    protected $table = 'sc_qa_answer_vote'; 
    protected $primaryKey = 'qa_answer_vote_id';
    public $timestamps = false;
    
    public function user() {
       
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function qaAnswer() {
       
        return $this->belongsTo(QAAnswer::class, 'qa_answer_id', 'qa_answer_id');
    }
}
