<?php

namespace App\Http\Controllers;

use App\Events\ChatMessageEvent;
use App\Models\Post;
use Illuminate\Http\Request;

class MainViewController extends Controller
{
        public function home()
    {

        return view('home');
    }

    public function news()
    {

        return view('news');
    }

    public function chat()
    {

        return view('chat');
    }

    public function form()
    {

        return view('form');
    }

    public function post()
    {

        $posts = Post::paginate(6);
        return view('post',[
            'posts' => $posts
        ]);

        return view('chat');
    }

    public function store(Request $request){

        event(new ChatMessageEvent(
            $request->nickname,
            $request->message));

            return response()->json([
                'success'=>'chat message sent.'

            ]);
        }


     public function show($slug){

        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post',[
            'post' => $post
        ]);

     }



}
