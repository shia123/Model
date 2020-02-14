<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseDescription extends Model
{
    //
    protected 	$table = 'sc_house_description';
    protected 	$primaryKey = 'house_description_id';
    public $timestamps = false;

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function translation()
    {
        return $this->belongsTo(TranslationKey::class,'translation_key');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class,'who_added');
    }
}
