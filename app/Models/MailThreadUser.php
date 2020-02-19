<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailThreadUser extends Model
{
    //
    protected 	$table = 'pf_mail_thread_user';
    protected 	$primaryKey = 'thread_id';
    public $timestamps = false;
    
    public function mailThread() {
        
        return $this->belongsTo(MailThread::class, 'thread_id', 'thread_id');
    }

    public function mailThreadTexts() {
        
        return $this->belongsTo(MailThreadText::class ,'thread_id', 'thread_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
