<?php

use App\Models\Calendar;

use App\Models\UserRegistration;
use App\Models\Config;
use App\Models\Translation;
use App\Models\TranslationKey;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/feedComment/{userId}', function($userId) {
    $key = UserRegistration::with(
        'confirmation.userRegistration',
        'user.userRegistrations'
    )->where('user_registration_id',$userId)->get();
    dd($key);
    // dd($user->userResourceVotes[0]->resource);               
});

Route::get('/', function () {
    return view('welcome');
});
