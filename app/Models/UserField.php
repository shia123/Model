<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserField extends Model
{
    protected 	$table = 'pf_user_field';
    protected 	$primaryKey = 'user_id';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function countryChild() {
        return $this->belongsTo(CountryChild::class, 'country_child_id', 'child_id');
    }

    public function zoomAccount() {
        return $this->hasOne(UserZoom::class, 'zoom_account_id', 'user_zoom_id');
    }
}
