<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookUpResourceCateg extends Model
{
    protected $table = 'sc_lu_resource_categ'; 
    protected $primaryKey = 'lu_resource_categ_id';
    public $timestamps = false;
    
    public function community() {
        return $this->belongsTo(Community::class, 'community_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added');
    }

}
