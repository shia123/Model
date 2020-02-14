<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailText extends Model
{
    protected $table = 'pf_mail_text'; 
    protected $primaryKey = 'mail_id';
    public $timestamps = false;
    
    public function mail() {
        return $this->belongsTo(Mail::class, 'mail_id');
    }
}
