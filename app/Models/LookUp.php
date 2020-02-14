<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookUp extends Model
{
    //
    protected 	$table = 'sc_lu';
    protected 	$primaryKey = 'lu_id';
    public $timestamps = false;
    
    public function categCode()
    {
        return $this->belongsTo(LookUpCategory::class);
    }
    public function translation()
    {
        return $this->belongsTo(TranslationKey::class);
    }
    
    
  
}
