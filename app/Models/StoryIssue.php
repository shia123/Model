<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class StoryIssue extends Model
{
    protected $table = 'sc_story_issue';
    protected $primaryKey = 'story_issue_id';
    public $timestamps = false;
    
    public function stories(){
        return $this->hasMany(Story::class, 'story_id');
    }

    public function issueCategories(){
        return $this->hasMany(IssueCategory::class, 'issue_category_id', 'issue_category_id');
    }
}
