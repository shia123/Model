<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected 	$table 			= 'pf_comment';
	protected 	$primaryKey 	= 'comment_id';
    public 		$timestamps 	= false;
   
    
    public function commentText() {

        return $this->belongsTo(CommentText::class ,'comment_id' , 'comment_id' );
    }
    
    public function user() {
        
        return $this->belongsTo(User::class ,'owner_user_id' , 'user_id' );
    }

 
   

}
