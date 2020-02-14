<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityConfig extends Model
{
    //
    protected 	$table = 'sc_community_config';
    protected 	$primaryKey = 'community_config_id';
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class,'who_added','user_id');
    }
    
    public function config(){
        return $this->belongsTo(Config::class,'config_id','config_id');
    }
   
}
