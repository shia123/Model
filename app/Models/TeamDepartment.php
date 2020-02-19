<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamDepartment extends Model
{
    protected $table = 'sc_team_department';
    protected $primaryKey = 'team_department_id';
    public $timestamps = false;

    public function community() {
        
        return $this->belongsTo(Community::class, 'community_id','community_id');
    }
    
    public function user() {
        
        return $this->belongsTo(User::class, 'who_added','user_id');
    }

    public function translation() {
        
        return $this->hasMany(Translation::class, 'translation_key','translation_key');
    }

    public function teamMembers() {
        
        return $this->hasMany(TeamMember::class, 'team_department_id','team_department_id');
    }
}
