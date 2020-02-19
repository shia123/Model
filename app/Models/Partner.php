<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected 	$table = 'sc_partner';
    protected $primaryKey = 'partner_id';
    public $timestamps = false;
    
    public function translation() {
       
        return  $this->belongsTo(Translation::class, 'invite_email_translation_key', 'translation_key');
    }
}
