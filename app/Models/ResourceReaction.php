<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceReaction extends Model
{
    protected 	$table = 'sc_resource_reaction';
    protected 	$primaryKey = 'resource_reaction_id';

    public function resource() {

        return $this->belongsTo(Resource::class,'resource_id','resource_id');
    }

    public function user() {

        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    
    public function reaction() {
        return $this->belongsTo(Reaction::class, 'reaction_id','reaction_id');
    }
  
}
