<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceLocation extends Model
{
    protected 	$table = 'sc_resource_location';
    protected 	$primaryKey = 'resource_location_id';
    public $timestamps = false;
    
    public function resource() {

        return $this->belongsTo(Resource::class,'resource_id','resource_id');
    }

    public function user() {

        return $this->belongsTo(User::class,'who_added','user_id');
    }
}
