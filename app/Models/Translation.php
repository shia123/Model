<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected 	$table = 'sc_translation';
    protected 	$primaryKey = 'translation_id';
    public $timestamps = false;

    public function translationKey()
    {
        return $this->belongsTo(TranslationKey::class,'translation_key');
    }

    public function countryCode()
    {
        return $this->belongsTo(CountryCode::class, 'translation_key','translation_key');
    }
    public function groupTypes()
    {
        return $this->hasMany(GroupType::class, 'translation_key','translation_key');
    }
    public function issueCategories()
    {
        return $this->hasMany(IssueCategory::class,'translation_key','translation_key');
    }

    public function translations()
    {
        return $this->belongsTo(Translation::class, 'translation_key','translation_key');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'translation_key','translation_key');
    }

    public function communityProgramDescription() {
        return $this->hasOne(CommunityProgramDescription::class, 'translation_key','translation_key');
    }

    public function emailContents()
    {
        return $this->hasMany(EmailContent::class,'email_content_translation_key','translation_key');
    }
    public function lookUps()
    {
        return $this->hasMany(LookUp::class,'translation_key','translation_key');
    }

    public function teamDepartments()
    {
        return $this->hasMany(TeamDepartment::class,'translation_key','translation_key');
    }
 
}
