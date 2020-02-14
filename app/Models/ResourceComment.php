<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceComment extends Model
{
    protected 	$table = 'sc_resource_comment';
    protected 	$primaryKey = 'resource_comment_id';
    public $timestamps = false;
    
    public function resource() {

        return $this->belongsTo(Resource::class,'resource_id','resource_id');
    }

    public function user() {

        return $this->belongsTo(User::class,'user_id','user_id');
    }
}
