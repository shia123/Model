<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QAVote extends Model
{
    protected 	$table = 'sc_qa_vote';
    protected 	$primaryKey = 'qa_vote_id';
    public $timestamps = false;
    
    public function qa() {
        
        return $this->belongsTo(QA::class, 'qa_id', 'qa_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
