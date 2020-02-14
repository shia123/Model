<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestServicesCategoryItem extends Model
{
    protected $table = 'sc_guest_services_categ_item'; 
    protected $primaryKey = 'guest_services_categ_item_id';
    public $timestamps = false;
    

    public function guestServicesCategory() {
        return $this->belongsTo(GuestServicesCategory::class, 'guest_services_categ_id', 'guest_services_categ_id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }
}
