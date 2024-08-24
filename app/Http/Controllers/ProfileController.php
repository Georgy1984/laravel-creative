<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Models\Profile;
use App\Services\PostService;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        return Profile::all();

    }

    public function create() {

        $data = [

            'birthed_at' => '1988',
            'avatar_path' => '%userData%/Anna_avatar.png',


        ];

        ProfileService::create($data);

    }
    public function update(int $id) {

        ProfileService::update($id);
    }

    public function delete(int $id) {

        return ProfileService::delete_by_id($id);



    }
}
