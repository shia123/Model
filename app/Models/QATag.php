<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QATag extends Model
{
    protected 	$table = 'sc_qa_tag';
    protected 	$primaryKey = 'qa_tag_id';
    public $timestamps = false;
    
    public function QA() {
        
        return $this->belongsTo(QA::class, 'qa_id', 'qa_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
