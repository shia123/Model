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
    
    public function teamMember(){
        return $this->hasMany(TeamMember::class, 'team_department_id');
    }
}
