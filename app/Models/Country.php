<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected 	$table = 'pf_country';
    protected 	$primaryKey = 'country_iso';
    public $incrementing = false;
    public $keyType = 'string';
    public $timestamps = false;
    
    public function countries(){
        return $this->hasMany(CountryChild::class,'country_iso','country_iso');
    }

    //rico
    public function storyDonations(){
        return $this->hasMany(StoryDonation::class, 'country_iso','country_iso');
    }
  
}
