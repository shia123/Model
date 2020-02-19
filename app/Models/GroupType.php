<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupType extends Model
{
    protected 	$table = 'sc_group_type';
    protected 	$primaryKey = 'group_type_id';
    public $timestamps = false;
    
    public function translation() {

        return $this->hasMany(Translation::class,'translation_key','translation_key');
    }

    public function community() {
        
        return $this->belongsTo(Community::class,'community_id','community_id');
    }
}
