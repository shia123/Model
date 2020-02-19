<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailThreadText extends Model
{
    protected 	$table = 'pf_mail_thread_text';
    protected 	$primaryKey = 'message_id';
    public $timestamps = false;
    
    public function mailThread() {
        
        return $this->belongsTo(MailThread::class, 'thread_id', 'thread_id');
    }

    public function mailThreadUser() {
        
        return $this->belongsTo(MailThreadUser::class, 'thread_id', 'thread_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    
}
