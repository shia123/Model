<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryCode extends Model
{
    //
    protected 	$table = 'sc_country_code';
    protected $primaryKey = 'country_code_id';
    public $timestamps = false;

    public function translations(){
        return $this->hasMany(Translation::class,'translation_key','translation_key');
    }

    public function user(){
        return $this->belongsTo(User::class,'who_added','user_id');
    }

   

}
