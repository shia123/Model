<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceVote extends Model
{
    protected 	$table = 'sc_resource_vote';
    protected 	$primaryKey = 'resource_vote_id';
    public $timestamps = false;
    
    public function resource() {
        return $this->belongsTo(Resource::class);
    }

}

