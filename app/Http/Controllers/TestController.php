<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\users;

class TestController extends Controller
{
    public function beforepost()
    {
    	return view('test');
    }

    public function afterpost(Request $request)
    {
    	$a = $request->input('text');

            $x = ['hi' => $a];
            return response()->json($x);
    }


    public function tweet()
    {

        $string = Twitter::getUserTimeline(['screen_name' => 'amit', 'count' => 10, 'format' => 'json']);
        $string = json_decode($string);
        
        // $name = $string[0]->user->name;
        // $screen_name = $string[0]->user->name;

         $user        = '<span class="tweets">Tweeted by: </span>'
    .$string[0]->user->name. '<br/>';
    $screen_name = '<span class="tweets">Screen name: </span>'
    .$string[0]->user->name. '<br /><hr/>';
  
        $tweets = '';
        $i = 1;
        foreach ($string as $value)
        {
    
            $tweets .= '<span class="tweets">Tweet ' .$i. ': </span>'
            .$value->text. '<br/><hr/>';
            $i++;
        }
        
        echo $user.$screen_name.$tweets;
    }
}
