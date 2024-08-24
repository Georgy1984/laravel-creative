<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Response;

class PostService
{
    public static function create(array $data): Post {
        return Post::create($data);
    }

    public static function update(Post $post, array $data): Post {
//        $data = [
//            'title' => 'jojo update post',
//            'description' => 'new post description',
//            'content' => 'new post content',
//        ];
        $post->update($data);
      return $post;


    }

    public static function delete_by_id(Post $post)  {

        $post->delete();
        return response(['message' => 'post deleted'], Response::HTTP_OK);
    }

    public static function show(Post $post): Post {
         return Post::findOrFail($post);
    }

    public static function index()
    {
        return Post::all();

    }

}
