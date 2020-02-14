<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QaCateg extends Model
{
    protected $table = 'sc_qa_categ'; 
    protected $primaryKey = 'qa_categ_id';
    public $timestamps = false;
    
    public function qa() {
        return $this->belongsTo(QA::class, 'qa_id',  'qa_id');
    }

    public function lookUpQaCateg() {
        return $this->belongsTo(LookUpQaCateg::class, 'lu_qa_categ_id', 'lu_qa_categ_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
