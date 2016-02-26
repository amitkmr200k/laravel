<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ShareErrorsFromSession ;

class EditProfileController extends Controller
{
    public function edit_profile()
    {

     	return view('edit_profile');   
    }
    
}
