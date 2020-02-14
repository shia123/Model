<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QaAnswerTag extends Model
{
    protected $table = 'sc_qa_answer_tag'; 
    protected $primaryKey = 'qa_answer_tag_id';
    public $timestamps = false;
    
    public function qaAnswer() {
        return $this->belongsTo(QAAnswer::class, 'qa_answer_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added');
    }
}
