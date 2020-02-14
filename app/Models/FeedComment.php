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
   
    
    
    public function user(){
        return $this->belongsTo(User::class ,'user_id' , 'user_id' );
    }

   

}
