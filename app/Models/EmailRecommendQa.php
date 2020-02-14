<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailRecommendQa extends Model
{
    protected $table = 'sc_email_recommend_qa'; 
    protected $primaryKey = 'email_recommend_qa_id';
    public $timestamps = false;

    public function user() {
        return $this->hasMany(User::class, 'user_id');
    }

    public function qa() {
        return $this->hasMany(QA::class, 'qa_id');
    }

}
