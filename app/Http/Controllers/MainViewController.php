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

    public function chat()
    {

        return view('chat');
    }

    public function post()
    {

        $posts = Post::paginate(2);
        return view('post',[
            'posts' => $posts
        ]);
    }

    public function store(Request $request){

        event(new ChatMessageEvent(
            $request->nickname,
            $request->message));

            return response()->json([
                'success'=>'chat message sent.'

            ]);

    }

}
