<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookUpQaCateg extends Model
{
    protected $table = 'sc_lu_qa_categ'; 
    protected $primaryKey = 'lu_qa_categ_id';
    public $timestamps = false;
    
    public function community() {
        return $this->belongsTo(Community::class, 'community_id','community_id');
    }
    
    public function media() {
        return $this->belongsTo(Media::class, 'media_id','media_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'who_added','user_id');
    }
}
