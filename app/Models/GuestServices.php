<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestServices extends Model
{
    protected $table = 'sc_guest_services'; 
    protected $primaryKey = 'guest_services_id';
    public $timestamps = false;
    

    public function community() {
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }
     
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function guestServicesCategory() {
        return $this->belongsTo(GuestServices::class, 'guest_services_categ_id');
    }
}
