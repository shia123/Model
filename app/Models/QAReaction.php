<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QAReaction extends Model
{
    protected 	$table = 'sc_qa_reaction';
    protected 	$primaryKey = 'qa_reaction_id';
    public $timestamps = false;
    
    public function question()
    {
        return $this->belongsTo(QA::class,'qa_id');
    }

    public function userQuestion()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    //3
    public function qa() {
        return $this->belongsTo(QA::class, 'qa_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
