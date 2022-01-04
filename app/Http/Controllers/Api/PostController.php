<?php

namespace App\Http\Controllers\Api;

use App\Services\PostService;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource as PostResource;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postService;

        public function __construct(PostService $postService) {
            $this->postService = $postService;
    }

    public function index()
    {
       /* return User:: all();*/
        // $users=User::paginate(10);

        /* return User:: all();*/
        $posts = $this->postService->creatPosts();
        return PostResource::collection($posts);

    }
}

