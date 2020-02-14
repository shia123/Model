<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueCategory extends Model
{
    protected 	$table = 'sc_issue_category';
    protected 	$primaryKey = 'issue_category_id';
    public $timestamps = false;
    
     public function translation()
    {
        return $this->hasMany(Translation::class,'translation_key','translation_key');
    }
    public function community()
    {
        return $this->belongsTo(Community::class,'community_id','community_id');
    }

    //rico
    public function storyIssue(){
        return $this->belongsTo(StoryIssue::class, 'issue_category_id','issue_category_id');
    }
    
    public function userIssues(){
        return $this->hasMany(UserIssue::class, 'issue_category_id','issue_category_id');
    }
}
