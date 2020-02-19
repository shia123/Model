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

    public function translation() {
        
        return $this->belongsTo(Translation::class,'translation_key','translation_key');
    }
    
}
