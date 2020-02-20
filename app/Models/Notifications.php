<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    //
    protected 	$table = 'pf_notification';
    protected $primaryKey ='notification_id';
    public $timestamps = false;
    
    public function notification() {
        
        return $this->belongsTo(User::class ,'user_id' , 'user_id');
    }
   
}
