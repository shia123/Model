<?php

use App\Models\Calendar;

use App\Models\Resource;
use App\Models\Config;
use App\Models\Translation;
use App\Models\TranslationKey;

use Illuminate\Database\Eloquent\Builder;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.php ar
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('output/aboutus');
});

Route::get('/feedComment/{userId}', function($userId) {


    
    // $key= Resource::with('resourceTags')->with('user')->with('resourceCategories')
    // ->whereHas('resourceTags',function( $query ){
    //     $query->where('tag_name', 'LIKE', '%Shia%');
    // })->whereHas('user', function ( $query ) {
    //     $query->where('full_name','LIKE', '%Shia%');
    // })->orWhereHas('resourceCategories', function ( $query ) {
    //     $query->where('lu_resource_categ_id', 'LIKE', '%1%');
    // })->get()->first();
    $key = Resource::whereHas('user', function ($query)  {
        $query->where('full_name', 'like', '%Shia%')
        ->orWhere('tag_name', 'like', '%Shia%');
    })->get();
    return($key); 
});


 // $key = Resource::with(
    //     'resourceCategories.resource',
    //     'user.resources'
    // )->get();
    // $key = Resource::with('resourceCategories')->where('title', 'LIKE', '%john%') 
    // ->orWhereHas('user', function($q) {
    //     $q->where('full_name', 'LIKE', '%john%');
    // })->with('resourceCategories.resource')
    // ->get()->first();


    // $key = Resource::with('resourceTags.resource')->with('user.resources')->with('resourceCategories.resource');

    // $key
    //     ->whereHas('resourceTags.resource',function( $query ) use ( $parameterValues ){
    //         $query->where('title', $parameterValues['region_names'] );
    //     })
    //     ->whereHas('season', function ( $query ) use ( $parameterValues ){
    //         $query->where('name', $parameterValues['season_names'] );
    //     })
    //     ->where( function( $subquery ) use ( $ret ){
    //         $ret->whereHas('homeClub', function ( $query ){
    //             $query->where('name','Arsenal' );
    //         } );
    //         $ret->orWhereHas('awayClub', function ( $query ){
    //             $query->where('name','Arsenal');
    //          });

             
    //     }); 


    // $key = Resource::with('resourceTags.resource') 
    // ->orWhereHas('resourceTags.resource', function($q) {
    //     $q->where('tag_name', 'LIKE', '%shia%');
    // })->get()->first();
    
    // return($key);
    // dd($user->userResourceVotes[0]->resource);               