<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookUpQaCateg extends Model
{
    protected $table = 'sc_lu_qa_categ'; 
    protected $primaryKey = 'lu_qa_categ_id';
    public $timestamps = false;
    
    public function QaCategs(){
        return $this->hasMany(QaCateg::class, 'lu_qa_categ_id', 'lu_qa_categ_id');
    }
}
