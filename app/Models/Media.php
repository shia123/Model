<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected 	$table = 'sc_media';
    protected 	$primaryKey = 'media_id';
    public $timestamps = false;
    
    public function community()
    {
        return $this->belongsTo(Community::class,'community_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    //3
    public function keyInfoCommunityGuidelines() {
        return $this->hasMany(KeyInfoCommunityGuideline::class, 'media_id');
    }

    public function keyInfoPackets() {
        return $this->hasMany(KeyInfoPacket::class, 'media_id');
    }

    //shia
    public function resourceMedias()
    {
        return $this->hasMany(ResourceMedia::class,'media_id');
    }

    public function lookUpQaCategs()
    {
        return $this->hasMany(LookUpQaCateg::class,'media_id','media_id');
    }
}
