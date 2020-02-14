<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamDepartment extends Model
{
    protected $table = 'sc_team_department';
    protected $primaryKey = 'team_department_id';
    public $timestamps = false;

    public function community(){
        return $this->belongsTo(Community::class, 'community_id');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'who_added','user_id');
    }

    public function translation(){
        return $this->belongsTo(Translation::class, 'translation_key','translation_key');
    }
}
