<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected 	$table = 'sc_calendar';
    protected 	$primaryKey = 'calendar_id';
    public $timestamps = false;

    public function community() {
        return $this->belongsTo(Community::class,'community_id', 'community_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
    
}
