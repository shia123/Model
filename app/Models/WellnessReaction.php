<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WellnessReaction extends Model
{
    protected $table = 'sc_wellness_reaction'; 
    protected $primaryKey = 'wellness_reaction_id';
    public $timestamps = false;
    
    public function reaction() {
         
        return $this->belongsTo(Reaction::class, 'reaction_id', 'reaction_id');
    }
    public function user() {

        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function wellness() {
        
        return $this->belongsTo(Wellness::class, 'wellness_id', 'wellness_id');
    }
}
