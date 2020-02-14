<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NeighborhoodTool extends Model
{
    //
    protected 	$table = 'sc_neighborhood_tool';
    protected 	$primaryKey = 'neighborhood_tool_id';
    public $timestamps = false;
    
    public function neighborhoodCategory()
    {
        return $this->belongsTo(NeighborhoodCategory::class,'category_id','category_id');
    }   

    public function community()
    {
        return $this->belongsTo(Community::class,'community_id','community_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'who_added','user_id');
    }


}
