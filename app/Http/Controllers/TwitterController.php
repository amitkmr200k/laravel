<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Twitter;

class TwitterController extends Controller
{
    public function tweets(Request $request)
    {
        $user_name = $request->input('user_name');
        $string = Twitter::getUserTimeline(['screen_name' => $user_name, 'count' => 10, 'format' => 'json']);
        $string = json_decode($string);
     
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
        
        $a = $user.$screen_name.$tweets;
        $send_tweets = ['display_tweets'=> $a];

        return response()->json($send_tweets);
    }
}
