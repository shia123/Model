<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected 	$table = 'sc_community';
    protected 	$primaryKey = 'community_id';
    public $timestamps = false;

    public function calendars() {

        return $this->hasMany(Calendar::class, 'community_id', 'community_id');
    }

    public function emailContents() {

        return $this->hasMany(EmailContent::class, 'community_id', 'community_id');
    }

    public function groups() {

        return $this->hasMany(Group::class, 'community_id', 'community_id');
    }
    
    public function groupTypes() {

        return $this->hasMany(GroupType::class, 'community_id', 'community_id');
    }

    public function houseDescription() {

        return $this->hasMany(HouseDescription::class, 'community_id', 'community_id');
    }

    public function issueCategories() {

        return $this->hasMany(IssueCategory::class, 'community_id', 'community_id');
    }

    public function medias() {

        return $this->hasMany(Media::class, 'community_id', 'community_id');
    }

    public function neighborhoodTools() {

        return $this->hasMany(NeighborhoodTool::class, 'community_id', 'community_id');
    }

    public function neighborhoodCategories() {

        return $this->hasMany(NeighborhoodCategory::class, 'community_id', 'community_id');
    }

    public function QAs() {

        return $this->hasMany(QA::class, 'community_id', 'community_id');
    }

    public function requestInvitations() {

        return $this->hasMany(RequestInvitation::class, 'community_id', 'community_id');
    }

    public function resources() {

        return $this->hasMany(Resource::class, 'community_id', 'community_id');
    }

    public function roles() {

        return $this->hasMany(Role::class, 'community_id', 'community_id');
    }


    //Rico
    public function checkInOuts() {

        return $this->hasMany(CheckInOut::class, 'community_id', 'community_id');
    }

    public function checkOutInstructions() {

        return $this->hasMany(CheckOutInstruction::class, 'community_id', 'community_id');
    }

    public function communitiesAboutUs() {

        return $this->hasMany(CommunityAboutUs::class, 'community_id', 'community_id');
    }

    public function communitiesProgramDescription() {

        return $this->hasMany(CommunityProgramDescription::class, 'community_id', 'community_id');
    }

    public function guestServices() {

        return $this->hasMany(GuestServices::class, 'community_id', 'community_id');
    }

    public function houseFaqAnswers() {

        return $this->hasMany(HouseFaqAnswer::class, 'community_id', 'community_id');
    }

    public function houseFaqCategories() {

        return $this->hasMany(HouseFaqCategory::class, 'community_id', 'community_id');
    }

    public function houseFaqQuestions() {

        return $this->hasMany(HouseFaqQuestion::class, 'community_id', 'community_id');
    }

    //2
    public function announcements(){

        return $this->hasMany(Announcement::class, 'community_id', 'community_id');
    }

    public function specialists() {

        return $this->hasMany(Specialist::class, 'community_id', 'community_id');
    }

    public function stories() {

        return $this->hasMany(Story::class, 'community_id', 'community_id');
    }

    public function storyQuestions() {

        return $this->hasMany(StoryQuestion::class, 'community_id', 'community_id');
    }

    public function storyFeatureds() {

        return $this->hasMany(StoryFeatured::class, 'community_id', 'community_id');
    }

    public function teamDepartments() {

        return $this->hasMany(TeamDepartment::class, 'community_id', 'community_id');
    }

    public function teamMembers() {

        return $this->hasMany(TeamMember::class, 'community_id', 'community_id');
    }

    public function users() {

        return $this->hasMany(User::class, 'community_id', 'community_id');
    }

    public function wellnesses() {

        return $this->hasMany(Wellness::class, 'community_id', 'community_id');
    }

    public function wellnessCategories() {

        return $this->hasMany(WellnessCategory::class, 'community_id', 'community_id');
    }

    //3
    public function houseMaps() {

        return $this->hasMany(Housemap::class, 'community_id', 'community_id');
    }

    public function inviteFriends() {

        return $this->hasMany(InviteFriend::class, 'community_id', 'community_id');
    }

    public function lookUpResourceCategs() {

        return $this->hasMany(LookUpResourceCateg::class, 'community_id', 'community_id');
    }

    public function lookUpQaCategs() {

        return $this->hasMany(LookUpQaCateg::class, 'community_id', 'community_id');
    }
    

    //shia
    public function reports() {

        return $this->hasMany(Report::class,'community_id', 'community_id');
    }

    public function reportsSuspend() {

        return $this->hasMany(ReportSuspend::class,'community_id', 'community_id');
    }

    public function referHouses() {

        return $this->hasMany(ReferHouse::class,'community_id', 'community_id');
    }

    public function userCommunities() {

        return $this->hasMany(UserCommunity::class,'community_id', 'community_id');
    }
}
