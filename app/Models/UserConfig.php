<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserConfig extends Model
{
    protected 	$table = 'sc_user_config';
    protected 	$primaryKey = 'user_config_id';
    public $timestamps = false;

    public function config(){
        return $this->belongsTo(Config::class, 'config_id', 'config_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }


}
