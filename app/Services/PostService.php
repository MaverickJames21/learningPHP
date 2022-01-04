<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\ValidatorService;
use Carbon\Carbon;



class PostService {

    private $validatorService;

    public function __construct(ValidatorService $validatorService) {
        $this->validatorService = $validatorService;
    }

    public function creatPosts(Request $request){


        $this->validatorService->validateFields($request->all(), $this->validatePost());

         // Get authenticated user.
         $user = Auth::user();

                 // Store fields in the database.
            $upload = $request->file('img');
            $date = Carbon::now()->format('Ymd-His_');
            $file_name = $date . $upload->getClientOriginalName();

                // Create post.
                $post = new Post;
                $post->title = $request->input('title');
                $post->date = $request->input('date');
                $post->img = 'file_img/' . $file_name;
                $post->content = $request->input('content');
                $post->user_id = $user->id;
                $post->save();

                 // Create temp folder if doesn't exist
            if (!Storage::directories('file_img')) {
                Storage::makeDirectory('file_img');
            }

            // Store the file.
            $upload->storeAs('file_img', $file_name);

            // Return the new post
            return $post;



    }
}
