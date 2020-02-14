<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueCategory extends Model
{
    //
    protected 	$table = 'sc_issue_category';
    protected 	$primaryKey = 'issue_category_id';
    public $timestamps = false;
    
     public function translationKey()
    {
        return $this->belongsTo(TranslationKey::class,'translation_key');
    }
    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    //rico
    public function storyIssue(){
        return $this->belongsTo(StoryIssue::class, 'issue_category_id');
    }
    public function userIssues(){
        return $this->hasMany(UsserIssue::class, 'issue_category_id');
    }
}
