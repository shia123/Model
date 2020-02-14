<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckOutInstruction extends Model
{
    //
    protected $table = 'sc_check_out_instruction'; 
    protected $primaryKey = 'check_out_instruction_id';
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class, 'who_added','user_id');
    }
    
    public function community() {
        return $this->belongsTo(Community::class, 'community_id','community_id');
    }
}
