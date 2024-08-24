<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        return Post::all();
//        return PostService::index();
        return PostResource::collection(Post::all())->resolve();

    }

    public function show(Post $post)
    {

        return PostResource::make($post)->resolve();
    }

    public function store(StoreRequest $request)
    {

        $data = $request->validated();

//        $data = [
//            'title' => 'asshole',
//            'description' => 'post description',
//            'content' => 'post content',
//       ];

         $post = PostService::create($data);
         return PostResource::make($post)->resolve();


    }

    public function update(Post $post, UpdateRequest $request)
    {
        $data = $request->validated();
        $post = PostService::update($post, $data);
        return PostResource::make($post)->resolve();
    }

    public function destroy(Post $post)
    {

        return PostService::delete_by_id($post);


    }
}
