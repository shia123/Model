<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QAVote extends Model
{
    protected 	$table = 'sc_qa_vote';
    protected 	$primaryKey = 'qa_vote_id';
    public $timestamps = false;
    
    public function question()
    {
        return $this->belongsTo(QA::class,'qa_id');
    }

    public function userQuestion()
    {
        return $this->belongsTo(User::class,'who_added');
    }
}
