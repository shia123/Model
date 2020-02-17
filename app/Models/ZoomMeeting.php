<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZoomMeeting extends Model
{
    protected $table = 'sc_zoom_meeting'; 
    protected $primaryKey = 'zoom_meeting_id';
    public $timestamps = false;
    
    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
