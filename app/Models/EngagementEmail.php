<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EngagementEmail extends Model
{
    protected $table = 'sc_engagement_email'; 
    protected $primaryKey = 'engagement_email_id';
    public $timestamps = false;

    public function qa() {
        return $this->belongsTo(QA::class, 'qa_id', 'qa_id');
    }

    public function resources() {
        return $this->belongsTo(Resources::class, 'resource_id','resource_id');
    }

    public function story() {
        return $this->belongsTo(Story::class, 'story_id','story_id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id','user_id');
    }
}
