<?php

namespace App\Http\Controllers;
use App\Http\Resources\Post\PostResource;
use App\Http\Resources\User\UserResource;
use App\Models\Post;
use App\Models\User;
use App\Services\PostService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all())->resolve();


    }
    public function show(User $user)
    {
        return UserResource::make($user)->resolve();

    }
    public function create() {

//        echo (new \App\Models\User)->getTable();

        $data = [

//                'name' => 'Anna',
//                'email' => 'anna@gmail.com',
//                'password' => 'anna123',


                'name' => 'Athur',
                'email' => 'athur@gmail.com',
                'password' => 'athur123'

        ];

        UserService::createUser($data);
    }

    public function update(int $id)
    {

        UserService::updateUser($id);
    }

    public function destroy(int $id) {

        return UserService::deleteUser($id);
    }


}
