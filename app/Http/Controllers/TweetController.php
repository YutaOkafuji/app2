<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TweetRequest;
use App\Tweet;

class TweetController extends Controller
{
    public function index(){
        $tweets = Tweet::all();
        return view('tweets.index', ['tweets' => $tweets]);
    }

    public function create(TweetRequest $request){
        $tweet = new Tweet;
        $tweet->title = $request->title;
        $image = $request->image_url->store('public/images');
        $tweet->image_url = str_replace('public/', 'storage/', $image);
        unset($tweet['_token']);
        $tweet->save();
        return redirect('/');
    }

    public function delete(){
        
    }
}
