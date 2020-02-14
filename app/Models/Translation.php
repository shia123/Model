<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected 	$table = 'sc_translation';
    protected 	$primaryKey = 'translation_id';
    public $timestamps = false;

   

    public function countryCode() {
        return $this->belongsTo(CountryCode::class, 'translation_key','translation_key');
    }
    public function groupTypes()
    {
        return $this->belongsTo(GroupType::class, 'translation_key','translation_key');
    }
    public function issueCategories()
    {
        return $this->belongsTo(IssueCategory::class,'translation_key','translation_key');
    }

    // public function translations()
    // {
    //     return $this->belongsTo(Translation::class, 'translation_key','translation_key');
    // }

    public function permission() {
        return $this->belongsTo(Permission::class, 'translation_key', 'translation_key');
    }

    public function communityProgramDescription() {
        return $this->belongsTo(CommunityProgramDescription::class, 'translation_key', 'translation_key');
    }

    public function communityAboutUs() {
        return $this->belongsTo(CommunityAboutUs::class, 'translation_key', 'translation_key');
    }

    public function emailContents()
    {
        return $this->belongsTo(EmailContent::class,'email_content_translation_key','translation_key');
    }

    public function guestServicesCategories() {
        return $this->belongsTo(GuestServicesCategory::class, 'translation_key', 'translation_title');
    }
    public function lookUps()
    {
        return $this->belongsTo(LookUp::class,'translation_key','translation_key');
    }

    public function teamDepartments()
    {
        return $this->belongsTo(TeamDepartment::class,'translation_key','translation_key');
    }

    public function wellness()
    {
        return $this->belongsTo(Wellness::class,'translation_key','translation_key');
    }
 
    public function wellnessCategory()
    {
        return $this->belongsTo(Wellness::class,'translation_key','translation_key');
    }
    public function houseDescriptions() {
        return $this->belongsTo(HouseDescription::class, 'translation_key', 'translation_key');
    }

    public function houseFaqAnswers() {
        return $this->belongsTo(HouseFaqAnswer::class, 'translation_key', 'translation_key');
    }

    public function houseFaqCategories() {
        return $this->belongsTo(HouseFaqCategory::class, 'translation_key', 'translation_key');
    }

    public function houseFaqQuestions() {
        return $this->belongsTo(HouseFaqQuestion::class, 'translation_key', 'translation_key');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'translation_key', 'translation_key');
    }

    public function translationkey() {
        return $this->hasMany(TranslationKey::class, 'translation_key', 'translation_key');
    }
}
