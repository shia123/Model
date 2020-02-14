<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

    protected 	$table 			= 'pf_user';
	protected 	$primaryKey 	= 'user_id';
	public 		$timestamps 	= false;


    public function community() {
        return $this->belongsTo(Community::class, 'community_id', 'community_id');
    }

    public function group() {
        return $this->belongsTo(Group::class, 'user_group_id', 'group_id');
    }

    public function feedComments(){
        return $this->hasMany(FeedComment::class,'user_id','user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'user_id','owner_user_id');
    }

    public function feed(){
        return $this->belongsToMany(Feed::class,'user_id','user_id');
    }

    public function notifications(){
        return $this->hasMany(Notifications::class, 'user_id', 'user_id');
    }

    public function unfriends(){
        return $this->hasMany(Unfriend::class, 'user_id', 'user_id');
    }
    
    public function userField(){
        return $this->hasOne(UserField::class, 'user_id', 'user_id');
    }
   
    public function friends(){
        return $this->hasMany(Friend::class,'user_id', 'user_id');
    }

    public function requestInvitations(){
        return $this->hasMany(RequestInvitation::class, 'who_added', 'user_id');
    }
    
    public function friendRequests(){
        return $this->hasMany(FriendRequest::class, 'user_id', 'user_id');
    }
    
    public function mailThreadUsers(){
        return $this->hasMany(MailThreadUser::class,'user_id', 'user_id');
    }

    public function mailThreadTexts(){
        return $this->hasMany(MailThreadText::class, 'user_id', 'user_id');
    }

    public function countryCodes(){
        return $this->hasMany(CountryCode::class,'who_added','user_id');
    }

    public function userStatus(){
        return $this->hasMany(UserStatus::class, 'user_id', 'user_id');
    }

    public function configs(){
        return $this->hasMany(Config::class,'who_added','user_id');
    }

    public function communityConfigs(){
        return $this->hasMany(CommunityConfig::class,'who_added','user_id');
    }

    public function calendars(){
        return $this->hasMany(Calendar::class,'who_added', 'user_id');
    }

    public function emailContents(){
        return $this->hasMany(EmailContent::class,'who_added','user_id');
    }

    public function feedReactions(){
        return $this->hasMany(FeedReaction::class,'user_id', 'user_id');
    }

    public function groupAdmins(){
        return $this->hasMany(GroupAdmin::class, 'user_id', 'user_id');
    }

    public function groupFeeds(){
        return $this->hasMany(GroupFeed::class,'user_id', 'user_id');
    }

    public function groupMembers(){
        return $this->hasMany(GroupMember::class, 'user_id', 'user_id');
    }

    public function SignUpMember(){
        return $this->hasMany(GroupSignUp::class, 'user_id_from', 'user_id');
    }

    public function medias(){
        return $this->hasMany(Media::class, 'user_id', 'user_id');
    }

    public function neighborhoodTools(){
        return $this->hasMany(NeighborhoodTool::class, 'who_added', 'user_id');
    }

    public function QAs(){
        return $this->hasMany(QA::class, 'who_added', 'user_id');
    }

    public function qaAnswers(){
        return $this->hasMany(QAAnswer::class,'who_added', 'user+id');
    }

    public function qaReactions(){
        return $this->hasMany(QAReaction::class, 'user_id', 'user_id');
    }

    public function qaTags(){
        return $this->hasMany(QATag::class, 'who_added', 'user_id');
    }

    public function userResource(){
        return $this->hasMany(Resource::class,'who_added', 'user_id');
    }

    public function ResourceCategories(){
        return $this->hasMany(ResourceCategory::class, 'who_added', 'user_id');
    }

    public function resourceComments(){
        return $this->hasMany(ResourceComment::class,'user_id', 'user_id');
    }

    public function userResourceReactions(){
        return $this->hasMany(ResourceReaction::class, 'user_id', 'user_id');
    }

    public function userResourceVotes(){
        return $this->hasMany(ResourceVote::class,'user_id','user_id');
    }

    public function storyComments(){
        return $this->hasMany(StoryComment::class, 'user_id', 'user_id');
    }
  
    public function houseDescriptions(){
        return $this->hasMany(HouseDescription::class, 'who_added', 'user_id');
    }

    public function userRegistrations(){
        return $this->hasMany(UserRegistration::class,'user_id','user_id');
    }
    
    public function userPasswordResets() {
        return $this->hasMany(UserPasswordReset::class,'user_id','user_id');
    }
    

    //Rico
    public function adminPermissions() {
        return $this->hasMany(AdminPermission::class, 'who_added', 'user_id');
    }

    public function checkInOuts() {
        return $this->hasMany(CheckInOut::class, 'user_id','user_id');
    }

    public function checkOutInstructions() {
        return $this->hasMany(CheckOutInstruction::class, 'who_added','user_id');
    }

    public function communitiesAboutUs() {
        return $this->hasMany(CommunityAboutUs::class, 'who_added', 'user_id');
    }

    public function communitiesProgramDescriptions() {
        return $this->hasMany(CommunityProgramDescription::class,'who_added', 'user_id');
    }

    public function emailRecommendQa(){
        return $this->hasMany(EmailRecommendQa::class, 'user_id','user_id');
    }

    public function emailRecommendResources(){
        return $this->belongsTo(EmailRecommendResource::class, 'user_id','user_id');
    }

    public function emailRecommendStories(){
        return $this->hasMany(EmailRecommendStory::class, 'user_id','user_id');
    }

    public function emailRecommendUser() {
        return $this->belongsTo(EmailRecommendUser::class, 'user_id', 'user_id');
    }

    public function engagementEmails() {
        return $this->hasMany(EngagementEmail::class, 'who_added', 'user_id');
    }

    public function guestServices() {
        return $this->hasMany(GuestServices::class, 'user_id', 'user_id');
    }

    public function guestServicesCategories() {
        return $this->hasMany(GuestServicesCategory::class, 'who_added', 'user_id');
    }

    public function guestServicesCategoryItems() {
        return $this->hasMany(GuestServicesCategoryItem::class, 'who_added', 'user_id');
    }

    public function mails() {
        return $this->hasMany(Mail::class, 'owner_user_id', 'user_id');
    }

    public function houseFaqAnswers() {
        return $this->hasMany(HouseFaqAnswer::class, 'who_added', 'user_id');
    }

    public function houseFaqCategories() {
        return $this->hasMany(HouseFaqCategory::class, 'who_added', 'user_id');
    }

    public function houseFaqQuestions() {
        return $this->hasMany(HouseFaqQuestion::class, 'who_added', 'user_id');
    }

    //2
    public function specialists(){
        return $this->hasMany(Specialist::class, 'user_id', 'user_id');
    }

    public function stories(){
        return $this->hasMany(Story::class, 'user_id', 'user_id');
    }

    public function storyDonations(){
        return $this->hasMany(StoryDonations::class, 'user_id', 'user_id');
    }

    public function storyFeatureds() {
        return $this->hasMany(StoryFeatured::class, 'user_id', 'user_id');
    }

    public function storyReactions(){
        return $this->hasMany(StoryReaction::class, 'user_id', 'user_id');
    }

    public function storyShares(){
        return $this->hasMany(StoryShare::class, 'user_id', 'user_id');
    }

    public function storyTags(){
        return $this->hasMany(StoryTag::class, 'who_added', 'user_id');
    }

    public function teamDepartments(){
        return $this->hasMany(TeamDepartment::class, 'who_added','user_id');
    }

    public function teamMembers(){
        return $this->hasMany(TeamMember::class, 'who_added','user_id');
    }

    public function userCommunities(){
        return $this->hasMany(UserCommunity::class, 'user_id', 'user_id');
    }

    public function userIssues(){
        return $this->hasMany(UsserIssue::class, 'user_id', 'user_id');
    }

    public function userRoles(){
        return $this->hasMany(UserRole::class, 'user_id', 'user_id');
    }

    public function userLanguages(){
        return $this->hasMany(UserLanguage::class, 'user_id', 'user_id');
    }

    public function userZoom(){
        return $this->hasOne(UserZoom::class, 'user_id', 'user_id');
    }

    public function wellnesses(){
        return $this->hasMany(Wellness::class, 'user_id', 'who_added');
    }

    public function wellnessCategories(){
        return $this->hasMany(WellnessCategories::class, 'user_id', 'who_added');
    }

    public function wellnessReactions(){
        return $this->hasMany(WellnessReaction::class, 'user_id');
    }

    public function zoomMeetings(){
        return $this->hasMany(ZoomMeeting::class, 'user_id','user_id');
    }
    
    //3
    public function houseMaps() {
        return $this->hasMany(Housemap::class, 'who_added','user_id');
    }

    public function inviteFriends() {
        return $this->hasMany(InviteFriend::class, 'who_added','user_id');
    }

    public function keyInfoCommunityGuidelines() {
        return $this->hasMany(KeyInfoCommunityGuideline::class, 'who_added', 'user_id');
    }

    public function keyInfoPackets() {
        return $this->hasMany(KeyInfoPacket::class, 'who_added', 'user_id');
    }

    public function lookUpResourceCategs() {
        return $this->hasMany(LookUpResourceCateg::class, 'who_added','user_id');
    }

    public function lookUpQaCategs() {
        return $this->hasMany(LookUpQaCateg::class, 'who_added','user_id');
    }

    public function unsubscribe() {
        return $this->belongsTo(Unsubscribe::class, 'email', 'email');
    }

    public function qaAnswerTags() {
        return $this->hasMany(QaAnswerTag::class, 'who_added', 'user_id');
    }

    public function qaAnswerVotes() {
        return $this->hasMany(QaAnswerTag::class, 'user_id', 'user_id');
    }

    public function qaCategs() {
        return $this->hasMany(QaCateg::class, 'who_added', 'user_id');
    }

    //shia
    public function userConfigs() {
        return $this->hasMany(UserConfig::class, 'user_id', 'user_id');
    }

    public function resourceTags() {
        return $this->hasMany(ResourceTag::class,'who_added','user_id');
    }

    public function resourceMedias() {
        return $this->hasMany(ResourceMedia::class,'who_added','user_id');
    }

    public function resourceLocations() {
        return $this->hasMany(ResourceLocation::class,'who_added','user_id');
    }
    
    public function report() {
        return $this->hasMany(Report::class,'who_added', 'user_id');
    }

    public function reportsSuspend() {
        return $this->hasMany(ReportSuspend::class, 'user_id', 'user_id');
    }
    
    public function referHouses() {
        return $this->hasMany(ReferHouse::class,'who_added', 'user_id');
    }

    public function qaVotes() {
        return $this->hasMany(QAVote::class, 'user_id', 'user_id');
    }
    
}