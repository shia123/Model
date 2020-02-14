<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailRecommendResource extends Model
{
    protected $table = 'sc_email_recommend_resource'; 
    protected $primaryKey = 'email_recommend_resource_id';
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id','user_id');
    }

    public function resource() {
        return $this->belongsTo(Resource::class, 'resource_id','resource_id');
    }

}
