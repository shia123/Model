<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserIssue extends Model
{
    protected $table = 'sc_user_issue';
    protected $primaryKey = 'user_issue_id';
    public $timestamps = false;

    public function issueCategory() {
        
        return $this->belongsTo(IssueCategory::class, 'issue_category_id', 'issue_category_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
