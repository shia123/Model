<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentText extends Model
{
    //
    protected	$table 	= 'pf_comment_text';
    protected	$primaryKey 	= 'comment_id';
    public $timestamps = false;

    public function comments(){
        return $this->hasMany(Comment::class ,'comment_id' , 'comment_id' );
    }
}
