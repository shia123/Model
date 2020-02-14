<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected 	$table = 'sc_community';
    protected 	$primaryKey = 'community_id';
    public $timestamps = false;

    public function communityCalendar(){
        return $this->hasMany(Calendar::class);
    }
    public function emailContents()
    {
        return $this->hasMany(EmailContent::class,'community_id','community_id');
    }
    public function groupCommunityGroup()
    {
        return $this->hasMany(Group::class);
    }
    public function groupCommunityType()
    {
        return $this->hasMany(GroupType::class);
    }
    public function houseDescription()
    {
        return $this->hasOne(HouseDescription::class);
    }
    public function issueCategCommunity()
    {
        return $this->hasMany(IssueCategory::class);
    }
    public function mediaCommunity()
    {
        return $this->hasMany(Media::class);
    }
    public function neighborhoodCommunity()
    {
        return $this->hasMany(NeighborhoodTool::class);
    }
    public function qaCommunity()
    {
        return $this->hasMany(QA::class);
    }
    public function Invitations()
    {
        return $this->hasMany(RequestInvitation::class);
    }
    public function resources()
    {
        return $this->hasMany(Resource::class,'community_id');
    }

    public function roleCommunity()
    {
        return $this->hasMany(Role::class,'community_id');
    }


    //Rico
    public function checkInOuts() {
        return $this->hasMany(CheckInOut::class, 'community_id','community_id');
    }

    public function checkOutInstructions() {
        return $this->hasMany(CheckOutInstruction::class, 'community_id','community_id');
    }

    public function communitiesAboutUs() {
        return $this->hasMany(CommunityAboutUs::class, 'community_id');
    }

    public function communitiesProgramDescriptions() {
        return $this->hasMany(CommunityProgramDescription::class, 'community_id','community_id');
    }

    public function guestServices() {
        return $this->hasMany(GuestServices::class, 'community_id');
    }

    public function houseFaqAnswers() {
        return $this->hasMany(HouseFaqAnswer::class, 'community_id');
    }

    public function houseFaqCategories() {
        return $this->hasMany(HouseFaqCategory::class, 'community_id');
    }

    public function houseFaqQuestions() {
        return $this->hasMany(HouseFaqQuestion::class, 'community_id');
    }

    //2
    public function announcements(){
        return $this->hasMany(Announcements::class, 'community_id');
    }

    public function specialists() {
        return $this->hasMany(Specialist::class, 'community_id');
    }

    public function stories() {
        return $this->hasMany(Story::class, 'community_id');
    }

    public function storyQuestions() {
        return $this->hasMany(StoryQuestion::class, 'community_id');
    }

    public function teamDepartments() {
        return $this->hasMany(TeamDepartment::class, 'community_id');
    }

    public function teamMembers() {
        return $this->hasMany(TeamMember::class, 'community_id');
    }

    public function users() {
        return $this->hasMany(User::class, 'community_id');
    }

    public function wellnesses() {
        return $this->hasMany(Wellness::class, 'community_id');
    }

    public function wellnessCategories() {
        return $this->hasMany(WellnessCategory::class, 'community_id');
    }

    //3
    public function housemaps() {
        return $this->hasMany(Housemap::class, 'community_id');
    }

    public function inviteFriends() {
        return $this->hasMany(InviteFriend::class, 'community_id');
    }

    public function lookUpResourceCategs() {
        return $this->hasMany(LookUpResourceCateg::class, 'community_id');
    }

    //shia
    public function report() {
        return $this->hasMany(Report::class,'community_id');
    }

    public function reportSuspend() {
        return $this->hasMany(ReportSuspend::class,'community_id');
    }

    public function referHouses() {
        return $this->hasMany(ReferHouse::class,'community_id');
    }
}
