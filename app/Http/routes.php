<?php

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('registration', 'RegistrationController@fill_registration_form');

    Route::post('registration', 'RegistrationController@validation');

    //Route::get('activate','ActivationController@is_not_registered');    

    // Route::get('activate','ActivationController@is_registered');    


    Route::get('test', function () {
        echo 'hi';
    });

});
