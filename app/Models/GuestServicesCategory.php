<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestServicesCategory extends Model
{
    protected $table = 'sc_guest_services_categ'; 
    protected $primaryKey = 'guest_services_categ_id';
    public $timestamps = false;
    

    public function guestServices() {
        return $this->hasMany(GuestServices::class, 'guest_services_categ_id');
    }

    public function guestServicesCategoryItems() {
        return $this->hasMany(GuestServicesCategoryItem::class, 'guest_services_categ_id');
    }
    public function user() {
        return $this->hasMany(User::class, 'who_added');
    }

    public function translationKey() {
        return $this->belongsTo(TranslationKey::class, 'translation_key');
    }

}
