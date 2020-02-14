<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected 	$table = 'sc_group';
    protected $primaryKey= 'group_id';
    public $timestamps = false;
    
    public function groupFeeds() {
        return $this->hasMany(GroupFeed::class);
    }
    public function groupMembers() {
        return $this->hasMany(GroupMember::class);
    }
    public function groupsSignUp() {
        return $this->hasMany(GroupSignUp::class);
    }

    public function groupAdmins() {
        return $this->hasMany(GroupAdmin::class,'group_id');
    }
     
    //RIco
    public function GroupFeedComment() {
        return $this->hasMany(GroupFeedComment::class, 'group_id');
    }

    //2
    public function photos(){
        return $this->hasMany(Photo::class, 'group_id');
    }
}
