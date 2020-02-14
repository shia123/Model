<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'sc_team_member';
    protected $primaryKey = 'team_member_id';
    public $timestamps = false;

    public function community(){
        return $this->belongsTo(Community::class, 'community_id','community_id');
    }

    public function teamDepartment(){
        return $this->belongsTo(TeamDepartment::class, 'team_department_id','team_department_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'who_added','user_id');
    }
}
