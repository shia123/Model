<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'sc_story'; 
    protected $primaryKey = 'story_id';
    public $timestamps = false;
    
    public function emailRecommendStory() {
        return $this->belongsTo(EmailRecommendStory::class, 'story_id');
    }

    public function engagementEmails() {
        return $this->hasMany(EngagementEmail::class, 'story_id');
    }

    //rico
    public function community(){
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }
    
    public function storyComments(){
        return $this->hasMany(StoryComment::class, 'story_id');
    }

    public function storyDonations(){
        return $this->hasMany(StoryDonation::class, 'story_id');
    }

    public function storyIssue(){
        return $this->belongsTo(StoryIssue::class, 'story_id');
    }
    public function storyMedia(){
        return $this->hasOne(StoryMedia::class, 'story_id');
    }

    public function storyReactions(){
        return $this->hasMany(StoryReaction::class, 'story_id');
    }
    
    public function storyShares(){
        return $this->hasMany(StoryShare::class, 'story_id');
    }

    public function storyTags(){
        return $this->hasMany(StoryTag::class, 'story_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
