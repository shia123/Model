<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected 	$table = 'sc_resource';
    protected 	$primaryKey = 'resource_id';
    public $timestamps = false;
    
    public function resourceCategories()
    {
        return $this->hasMany(ResourceCategory::class,'resource_id');
    }
    public function resourceComment()
    {
        return $this->hasMany(ResourceComment::class,'resource_id');
    }
    public function resourceReaction()
    {
        return $this->hasMany(ResourceReaction::class,'resource_id');
    }
    public function resourceVotes()
    {
        return $this->hasMany(ResourceVote::class,'resource_id');
    }

    //rico
    public function emailRecommendResource() {
        return $this->belongsTo(EmailRecommendResource::class, 'resource_id');
    }
    
    public function engagementEmails() {
        return $this->hasMany(EngagementEmail::class, 'resource_id');
    }

    //3
    //update
    public function resourceTags()
    {
        return $this->hasMany(ResourceTag::class,'resource_id');
    }

    public function resourceMedias()
    {
        return $this->hasMany(ResourceMedia::class,'resource_id');
    }


    public function resourceLocations()
    {
        return $this->hasMany(ResourceLocation::class,'resource_id');
    }
}
