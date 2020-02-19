<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookUpCategory extends Model
{
    //
    protected 	$table = 'sc_lu_categ';
    protected $primaryKey = 'categ_code';
    public $incrementing = false;
    public $keyType = 'string';
    public $timestamps = false;
    
    public function lookUps() {
        
        return $this->hasMany(LookUp::class,'categ_code','categ_code');
    }
}
