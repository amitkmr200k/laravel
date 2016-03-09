<?php

Route::group(
    ['middleware' => ['web']],
    function ()
    {

        Route::auth();
        Route::get('/home', 'HomeController@index');
        Route::get('/', 'IsguestController@is_guest')->middleware('is_active');

        // Does not require login.
        Route::get('registration', 'RegistrationController@view_registration');
        Route::post('registration', 'RegistrationController@save_registration');
        Route::get('activate', 'ActivationController@is_activate');
        Route::post(
                    'check_email_registration',
                    'RegistrationController@check_email'
                );
         Route::post(
                    'check_user_name_registration',
                    'RegistrationController@check_user_name'
                );
        
        // Requires login.
        Route::group(
            ['middleware' => ['auth']],
            function ()
            {
                Route::get(
                    'edit_profile',
                    'EditProfileController@view_edit_profile'
                );
                Route::post(
                    'edit_profile',
                    'EditProfileController@save_edit_profile'
                );
                Route::post(
                    'check_email',
                    'EditProfileController@check_email'
                );
                Route::get(
                    'assignment',
                    'AssignmentController@view_page'
                );
                Route::get(
                    'notification',
                    'NotificationController@view_page'
                );

                // Requires ADMIN login.
                Route::group(
                    ['middleware' => ['isAdmin']],
                    function ()
                    {
                        Route::get(
                            'admin_all_user_info',
                            'AdminUserInfoController@view_page'
                        );
                        Route::post(
                            'admin_all_user_info',
                            'AdminUserInfoController@view_user_data'
                        );
                        Route::post(
                            'update_user_info',
                            'AdminUserInfoController@update_user_data'
                        );
                        Route::post('twitter', 'TwitterController@tweets');
                        Route::get(
                            'admin_assign_role',
                            'AssignRoleController@view_page'
                        );
                        Route::post(
                            'admin_assign_role',
                            'AssignRoleController@update_roles'
                        );

                        Route::get(
                            'admin_assign_privilege',
                            'AdminAssignPrivilegeController@view_page'
                        );
                        Route::post(
                            'admin_assign_privilege',
                            'AdminAssignPrivilegeController@assign_privilege'
                        );
                    }
                );
            }
        );
    }
);
