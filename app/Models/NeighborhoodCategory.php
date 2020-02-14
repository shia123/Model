<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NeighborhoodCategory extends Model
{
    //
    protected 	$table = 'sc_neighborhood_category';
    protected 	$primaryKey = 'category_id';
    public $timestamps = false;
    
    public function categories(){
        return $this->hasMany(NeighborhoodTool::class,'category_id');
    }
   
}
