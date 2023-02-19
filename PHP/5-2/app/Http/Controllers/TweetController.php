<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Post;

class TweetController extends Controller
{
    Public function __construct()
    {
        $this->middleware('auth');
    }
    Public function index(){
        $tweets = Post::latest()->get();

        return view('tweet' ,compact('tweets'));
    }

    Public function create(Request $request){
        // Varidationを行う
        $this->validate($request, Post::$rules);

        Post::create([
            'user_id' => Auth::user()->id,
            'body' => $request->tweet,
        ]);

        return back();
    }
}
