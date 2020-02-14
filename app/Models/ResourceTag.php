<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceTag extends Model
{
    protected 	$table = 'sc_resource_tag';
    protected 	$primaryKey = 'resource_tag_id';
    public $timestamps = false;
    
    public function resource() {

        return $this->belongsTo(Resource::class,'resource_id','resource_id');
    }

    public function user() {

        return $this->belongsTo(User::class,'who_added','user_id');
    }
}
