<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailRecommendUser extends Model
{
    protected $table = 'sc_email_recommend_user'; 
    protected $primaryKey = 'email_recommend_user_id';
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
