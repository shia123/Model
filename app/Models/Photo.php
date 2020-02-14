<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'pf_photo'; 
    protected $primaryKey = 'photo_id';
    public $timestamps = false;
    
    public function feedCommentMedias() {
        return $this->belongsTo(FeedCommentMedia::class, 'photo_id', 'photo_id');
    }

    //rico
    public function group(){
        return $this->belongsTo(Group::class, 'group_id', 'group_id');
    }

    public function photoAlbum(){
        return $this->belongsTo(PhotoAlbum::class, 'album_id', 'album_id');
    }

    public function userStatusMedia(){
        return $this->belongsTo(UserStatusMedia::class, 'photo_id', 'photo_id');
    }
}