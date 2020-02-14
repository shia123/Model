<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestInvitation extends Model
{
    protected 	$table = 'sc_request_invitation';
    protected 	$primaryKey = 'request_invitation_id';
    public $timestamps = false;
    
    public function community()
    {
        return $this->belongsTo(Community::class,'community_id');
    }

  
}
