<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailThreadText extends Model
{
    protected 	$table = 'pf_mail_thread_text';
    protected 	$primaryKey = 'message_id';
    public $timestamps = false;
    
    public function mailText(){
        return $this->belongsTo(MailThreadText::class,'thread_id');
    }
    
    
}
