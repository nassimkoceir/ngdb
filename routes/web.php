<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('front.home');

Route::get('/sign-in/{provider}', 'SocialAuthController@signin')->name('front.signin');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/sign-out', function() {
        auth()->guard('web')->logout();
        return redirect()->route('front.home');
    })->name('front.signout');

    Route::get('jeanpierre', function() {
        return "Bonjour Jean-Pierre";
    });

});
