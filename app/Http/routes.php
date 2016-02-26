<?php

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');
    
    Route::get('/', 'IsguestController@is_guest');

    Route::get('registration', 'RegistrationController@fill_registration_form');

    Route::post('registration', 'RegistrationController@validation');

    Route::get('edit_profile', 'EditProfileController@edit_profile');
   
    Route::get('test', function () {
        echo 'hi';});

    
    



    // Route::get('activate', 'ActivationController@is_not_regstered');
    
    // Route::post('activate', 'ActivationController@');
    
    

});
