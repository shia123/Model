<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unfriend extends Model
{
    protected 	$table = 'pf_unfriend';
    protected 	$primaryKey = 'unfriend_id';
    public $timestamps = false;


    public function user() {
        
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
