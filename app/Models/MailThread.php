<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailThread extends Model
{
    //
    protected 	$table = 'pf_mail_thread';
    protected 	$primaryKey = 'thread_id';
    public $timestamps = false;
      
    public function mailThreadText(){
        return $this->hasMany(MailThreadText::class ,'thread_id' , 'thread_id' );
    }
    public function mailThreadUser(){
        return $this->hasMany(MailThreadUser::class ,'thread_id' , 'thread_id' );
    }
    public function Group()
    {
        return $this->hasMany(Group::class,'thread_id');
    }
   
}
