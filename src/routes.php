<?php


Route::group(['middleware' => 'web'], function () {

Route::get('/edit-profile', 'abhitheawesomecoder\laraveleditprofile\EditprofileController@editprofile');

Route::post('/edit-profile', 'abhitheawesomecoder\laraveleditprofile\EditprofileController@saveeditprofile');

});
