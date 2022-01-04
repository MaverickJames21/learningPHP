<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource as UserResource;
use App\Models\User;
use App\Services\UserService;
use Exception;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }


    public function index()
    {
       /* return User:: all();*/
        // $users=User::paginate(10);

        /* return User:: all();*/
        $users = $this->userService->allUser();
        return UserResource::collection($users);

    }

    public function show($id)
    {
        $user = $this->userService->getUser($id);
        return new UserResource($user);
    }



}


