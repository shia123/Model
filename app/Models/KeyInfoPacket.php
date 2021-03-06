<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyInfoPacket extends Model
{
    protected $table = 'sc_key_info_packet'; 
    protected $primaryKey = 'key_info_packet_id';
    public $timestamps = false;
    
    public function media() {
        
        return $this->belongsTo(Media::class, 'media_id', 'media_id');
    }

    public function user() {
        
        return $this->belongsTo(User::class, 'who_added', 'user_id');
    }

}
