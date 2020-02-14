<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\CommentText;
use App\Users;


class feedComment extends model
{
	protected 	$table 			= 'pf_feed_comment';
	protected 	$primaryKey 	= 'comment_id';
    public 		$timestamps 	= false;
   
    
    public function comment(){
        return $this->belongsTo(CommentText::class ,'comment_id' , 'comment_id' );
    }
    
    public function user(){
        return $this->belongsTo(User::class ,'user_id' , 'owner_user_id' );
    }

    //Rico
    public function feedCommentMedias() {
        return $this->hasMany(FeedCommentMedia::class, 'feed_comment_id');
    }

}
