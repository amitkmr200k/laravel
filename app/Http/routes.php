<?php

Route::group(['middleware' => ['web']   ], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'IsguestController@is_guest');

    // Does not require login.
    Route::get('registration', 'RegistrationController@view_registration');
    Route::post('registration', 'RegistrationController@save_registration');
    // Requires login.
    Route::group(['middleware' => ['auth']], function () {
        Route::get('edit_profile', 'EditProfileController@view_edit_profile');
        Route::post('edit_profile', 'EditProfileController@save_edit_profile');

        Route::get('admin_all_user_info', 'AdminUserInfoController@view_page');
        Route::post('admin_all_user_info', 'AdminUserInfoController@view_user_data');
        Route::post('update_user_info', 'AdminUserInfoController@update_user_data');
        Route::post('twitter', 'TwitterController@tweets');

        Route::get('admin_assign_role', 'AssignRoleController@view_page');
        Route::post('admin_assign_role', 'AssignRoleController@update_roles');

        Route::get('admin_assign_privilege', 'AdminAssignPrivilegeController@view_page');
        Route::post('admin_assign_privilege', 'AdminAssignPrivilegeController@assign_privilege');
    });

        // Route::get('forgot_password', 'ForgotPasswordController@view_page');
        // Route::post('forgot_password', 'ForgotPasswordController@send_reset_link');
});
