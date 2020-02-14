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
        return $this->hasMany(NeighborhoodTool::class,'category_id','category_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'who_added','user_id');
    }
    public function community()
    {
        return $this->belongsTo(Community::class,'community_id','community_id');
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class,'icon_id','icon_id');
    }
}
