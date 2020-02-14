<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class StoryDonation extends Model
{
    protected $table = 'sc_story_donation';
    protected $primaryKey = 'story_donation_id';
    public $timestamps = false;
    
    public function story(){
        return $this->belongsTo(Story::class, 'story_id', 'story_id');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'country_iso', 'country_iso');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
