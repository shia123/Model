<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranslationKey extends Model
{
    protected 	$table = 'sc_translation_key';
    protected $primaryKey = 'translation_key';
    public $incrementing = false;
    public $keyType = 'string';
    public $timestamps = false;

    public function translation()
    {
        return $this->belongsTo(Translation::class);
    }
    public function countryCodes()
    {
        return $this->hasOne(CountryCode::class,'translation_key');
    }
    public function groupTypeKey()
    {
        return $this->belongsToMany(TranslationKey::class,'translation_key');
    }
    public function categoryKey()
    {
        return $this->hasMany(IssueCategory::class,'translation_key');
    }
    public function translationKey()
    {
        return $this->hasMany(Translation::class,'translation_key');
    }
    public function storyTranslationKey()
    {
        return $this->hasMany(StoryQuestion::class,'translation_key');
    }
    public function countryKeyCode()
    {
        return $this->hasMany(CountryCode::class,'translation_key');
    }
    public function translationGroupTypeKey()
    {
        return $this->hasMany(GroupType::class,'translation_key');
    }
    public function houseTransKey()
    {
        return $this->hasOne(HouseDescription::class,'translation_key');
    }
  
    public function permissionKey()
    {
        return $this->hasMany(Permission::class,'translation_key');
    }

  
   
    //Rico
    public function communityAboutUs() {
        return $this->hasOne(CommunityAboutUs::class, 'translation_key');
    }

  



    public function guestServicesCategory() {
        return $this->hasOne(GuestServicesCategory::class, 'translation_key');
    }

    public function houseFaqAnswer() {
        return $this->hasOne(HouseFaqAnswer::class, 'translation_key');
    }

    public function houseFaqCategory() {
        return $this->hasOne(HouseFaqCategory::class, 'translation_key');
    }

    public function houseFaqQuestion() {
        return $this->hasOne(HouseFaqQuestion::class, 'translation_key');
    }

    //3
    public function partner(){
        return $this->hasOne(Partner::class, 'invite_email_translation_key');
    }

    public function translations(){
        return $this->hasMany(Translation::class, 'translation_key','translation_key');
    }
   
    public function countryCode(){
        return $this->hasMany(CountryCode::class, 'translation_key','translation_key');
    }
   

    
}
