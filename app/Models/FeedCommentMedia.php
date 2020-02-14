<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedCommentMedia extends Model
{
    protected $table = 'sc_feed_comment_media'; 
    protected $primaryKey = 'feed_comment_media_id';
    public $timestamps = false;

    public function feedComment() {
        return $this->belongsTo(Comment::class, 'feed_comment_id');
    }

    public function photos() {
        return $this->hasOne(Photo::class, 'photo_id', 'photo_id');
    }
}
