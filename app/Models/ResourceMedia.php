<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceMedia extends Model
{
    protected 	$table = 'sc_resource_media';
    protected 	$primaryKey = 'resource_media_id';
    public $timestamps = false;
    
    public function resource() {

        return $this->belongsTo(Resource::class,'resource_id','resource_id');
    }

    public function user() {

        return $this->belongsTo(User::class,'who_added','user_id');
    }


    public function media() {
        
        return $this->belongsTo(Media::class, 'media_id', 'media_id');
    }
}
