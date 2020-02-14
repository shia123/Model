<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

    protected 	$table 			= 'pf_user';
	protected 	$primaryKey 	= 'user_id';
	public 		$timestamps 	= false;

    public function feedComments(){
        return $this->hasMany(FeedComment::class,'owner_user_id','user_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'user_id','owner_user_id');
    }
    public function feed(){
        return $this->belongsToMany(Feed::class,'user_id','user_id');
    }
    public function userNotification(){
        return $this->hasMany(Notifications::class,'user_id','user_id');
    }
    public function userunfriend(){
        return $this->belongsTo(Unfriend::class,'user_id');
    }
    
    public function user(){
        return $this->hasOne(UserField::class,'user_id');
    }
   

    public function friend(){
        return $this->belongsTo(Friend::class,'user_id','user_id');
    }
    public function userFriendRequest(){
        return $this->belongsTo(FriendRequest::class,'user_id','user_id');
    }
    public function mailThreadUsers(){
        return $this->hasMany(MailThreadUser::class,'user_id');
    }


    public function friendRequest(){
        return $this->hasMany(FriendRequest::class );
    }
    public function userThread(){
        return $this->hasMany(MailThreadText::class );
    }
    public function unfriend(){
        return $this->hasMany(Unfriend::class );
    }
    public function countryCodes(){
        return $this->hasMany(CountryCode::class,'who_added','user_id');
    }
    public function userStatus(){
        return $this->hasMany(UserStatus::class);
    }
    public function configs(){
        return $this->hasMany(Config::class,'who_added','user_id');
    }
    public function communityConfigs(){
        return $this->hasMany(CommunityConfig::class,'who_added','user_id');
    }
    public function calendars(){
        return $this->hasMany(Calendar::class,'who_added');
    }
    public function userConfig(){
        return $this->hasMany(Config::class,'who_added');
    }
    public function emailContents(){
        return $this->hasMany(EmailContent::class,'who_added','user_id');
    }
    public function userFeedReact(){
        return $this->hasMany(FeedReaction::class);
    }
    public function groupPost(){
        return $this->hasMany(Group::class);
    }
    public function groupAdmin(){
        return $this->hasMany(GroupAdmin::class);
    }
    public function groupFeed(){
        return $this->hasMany(GroupFeed::class);
    }
    public function groupUserMember(){
        return $this->hasMany(GroupMember::class);
    }
    public function SignUpMember(){
        return $this->hasMany(GroupSignUp::class,'user_id_from');
    }
    public function userMedia(){
        return $this->hasMany(Media::class);
    }
    public function userNeighborhoodTool(){
        return $this->hasMany(NeighborhoodTool::class,'who_added');
    }
    public function userQA(){
        return $this->hasMany(QA::class,'who_added');
    }
    public function userQAAnswer(){
        return $this->hasMany(QAAnswer::class,'who_added');
    }
    public function userQAReaction(){
        return $this->hasMany(QAReaction::class,'who_added');
    }
    public function userQATag(){
        return $this->hasMany(QATag::class,'who_added');
    }
    public function userResource(){
        return $this->hasMany(Resource::class,'who_added');
    }
    public function ResourceCategories(){
        return $this->hasMany(ResourceCategory::class,'who_added');
    }
    public function userResourceComments(){
        return $this->hasMany(ResourceComment::class,'user_id');
    }
    public function userResourceReactions(){
        return $this->hasMany(ResourceReaction::class,'user_id');
    }
    public function userResourceVotes(){
        return $this->hasMany(ResourceVote::class,'user_id','user_id');
    }

    public function userStoryComment(){
        return $this->hasMany(StoryComment::class,'user_id');
    }
  
    public function usersCommunity(){
        return $this->hasMany(UserCommunity::class,'user_id');
    }

    public function houseDescriptions(){
        return $this->hasMany(HouseDescription::class,'who_added');
    }

    public function userRegistrations(){
        return $this->hasMany(UserRegistration::class,'user_id');
    }
    
    public function userPasswordResets() {
        return $this->hasMany(UserPasswordReset::class,'user_id');
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
        return $this->hasMany(CommunityAboutUs::class, 'who_added');
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

    public function emailRecommendStory(){
        return $this->belongsTo(EmailRecommendQa::class, 'user_id');
    }

    public function emailRecommendUser() {
        return $this->belongsTo(EmailRecommendUser::class, 'user_id');
    }

    public function engagementEmails() {
        return $this->hasMany(EngagementEmail::class, 'user_id');
    }

    public function guestServices() {
        return $this->hasMany(GuestServices::class, 'user_id');
    }

    public function guestServicesCategory() {
        return $this->hasMany(GuestServicesCategory::class, 'who_added');
    }

    public function guestServicesCategoryItems() {
        return $this->hasMany(GuestServicesCategoryItem::class, 'who_added');
    }

    public function mails() {
        return $this->hasMany(Mail::class, 'owner_user_id', 'user_id');
    }

    public function houseFaqAnswers() {
        return $this->hasMany(HouseFaqAnswer::class, 'who_added');
    }

    public function houseFaqCategories() {
        return $this->hasMany(HouseFaqCategory::class, 'who_added');
    }

    public function houseFaqQuestions() {
        return $this->hasMany(HouseFaqQuestion::class, 'who_added');
    }

    //2
    public function specialists(){
        return $this->hasMany(Specialist::class, 'user_id', 'user_id');
    }

    public function stories(){
        return $this->hasMany(Story::class, 'user_id');
    }

    public function storyComments(){
        return $this->hasMany(StoryComment::class, 'user_id');
    }

    public function storyDonations(){
        return $this->hasMany(StoryDonations::class, 'user_id');
    }

    public function storyReactions(){
        return $this->hasMany(StoryReaction::class, 'user_id');
    }
    public function storyShares(){
        return $this->hasMany(StoryShare::class, 'user_id');
    }
    public function teamMembers(){
        return $this->hasMany(TeamMember::class, 'who_added');
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
        return $this->hasMany(ZoomMeeting::class, 'user_id');
    }
    
    //3
    public function housemaps() {
        return $this->hasMany(Housemap::class, 'who_added');
    }

    public function inviteFriends() {
        return $this->hasMany(InviteFriend::class, 'who_added');
    }

    public function keyInfoCommunityGuidelines() {
        return $this->hasMany(KeyInfoCommunityGuideline::class, 'who_added');
    }

    public function keyInfoPackets() {
        return $this->hasMany(KeyInfoPacket::class, 'who_added');
    }

    public function lookUpResourceCategs() {
        return $this->hasMany(LookUpResourceCateg::class, 'who_added');
    }

    public function unsubscribes() {
        return $this->belongsTo(Unsubscribe::class, 'email');
    }

    public function qaAnswerTags() {
        return $this->hasMany(QaAnswerTag::class, 'who_added');
    }

    public function qaAnswerVotes() {
        return $this->hasMany(QaAnswerTag::class, 'user_id');
    }

    public function qaCategs() {
        return $this->hasMany(QaCateg::class, 'who_added');
    }

    public function qaReactions() {
        return $this->hasOne(QaReaction::class, 'user_id');
    }

    //shia
    public function userConfigs() {
        return $this->hasMany(UserConfig::class,'user_id');
    }

    public function resourceTags() {
        return $this->hasMany(ResourceTag::class,'who_added');
    }

    public function resourceMedias() {
        return $this->hasMany(ResourceMedia::class,'who_added');
    }

    public function resourceLocations() {
        return $this->hasMany(ResourceLocation::class,'who_added');
    }
    
    public function report() {
        return $this->hasMany(Report::class,'who_added');
    }

    public function reportSuspend() {
        return $this->hasMany(ReportSuspend::class,'who_added');
    }
    
    public function referHouses() {
        return $this->hasMany(ReferHouse::class,'who_added');
    }

    public function qaVotes() {
        return $this->hasMany(QAVote::class,'who_added');
    }
}
