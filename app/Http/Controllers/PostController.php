<?php

namespace App\Http\Controllers;
use Gate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

use Auth;
class PostController extends Controller
{
   public function show($id)
   {
    	auth()->loginUsingId(1);

    	$post =Post::findorFail($id);
   	
   		$this->authorize('show-post', $post);

    	   return $post->title;
   }
}
