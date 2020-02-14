<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryChild extends Model
{
    protected 	$table = 'pf_country_child';
    protected 	$primaryKey = 'child_id';
    public $timestamps = false;
    
    public function country(){
        return $this->belongsTo(Country::class, 'country_iso', 'country_iso');
    }
   
}
