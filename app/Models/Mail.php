<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'pf_mail'; 
    protected $primaryKey = 'mail_id';
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo(User::class, 'owner_user_id', 'user_id');
    }

    public function mailText() {
        return $this->hasOne(MailText::class, 'mail_id', 'mail_id');
    }
}
