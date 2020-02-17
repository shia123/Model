<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    //

    protected 	$table = 'sc_icons';
    protected 	$primaryKey = 'icon_id';
    public $timestamps = false;
    
    public function neighborhoodCategory() {
        
        return $this->hasOne(NeighborhoodCategory::class,'icon_id','icon_id');
    }   
}
