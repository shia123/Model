<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    protected 	$table = 'sc_config';
    protected 	$primaryKey = 'config_id';
    public $timestamps = false;

    public function communityConfigs() {

        return $this->hasMany(CommunityConfig::class,'config_id','config_id');
    }
    
    public function user() {

        return $this->belongsTo(User::class,'who_added', 'user_id');
    }

    public function userConfigs() {
        
        return $this->hasMany(UserConfig::class, 'config_id', 'config_id');
    }
}
