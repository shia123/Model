<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unsubscribe extends Model
{
    protected 	$table = 'sc_unsubscribe';
    protected $primaryKey = 'unsubscribe_id';
    public $incrementing = false;
    public $keyType = 'string';
    public $timestamps = false;

    public function user() {
        return $this->hasMany(User::class, 'email');
    }
}
