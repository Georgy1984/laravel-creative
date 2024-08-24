<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostResource;
use App\Models\Post;

use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
//        return Post::all();
//        return PostService::index();
//        $posts = Post::find(1);
//        dump($posts->user);
        return PostResource::collection(Post::all())->resolve();

    }

    public function show(Post $post)
    {

        return PostResource::make($post)->resolve();
    }

    public function store()
    {

        $data = [
            'profile_id' => 1,
            'category_id' => 1,
            'title' => 'asshole',
            'description' => 'post description',
            'content' => 'post content',
        ];
//        $post = PostService::create($data);
//        return $post;
        PostService::create($data);

    }

    public function update(int $id)
    {

        PostService::update($id);
    }

    public function destroy(int $id)
    {

        return PostService::delete_by_id($id);

        //        Post::findOrFail($id)->delete();
        //        return response(['message' => 'post deleted'], Response::HTTP_OK);

    }
}
