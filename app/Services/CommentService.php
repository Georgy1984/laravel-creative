<?php

namespace App\Services;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Response;

class CommentService
{
    public static function index()
    {
        return Comment::all();

    }
    public static function addComment($data) {
        return Comment::create($data);
    }

    public static function deleteComment(int $id) {
        Comment::findOrFail($id)->delete();
        return response(['message' => 'post deleted'], Response::HTTP_OK);
    }

    public static function updateComment(int $id) {
        $data = [
            'user' => '8',
            'likes' => '11',
            'post' => 'API new post content',
        ];
        $post = Comment::find($id);
        if ($post) {
            return $post->update($data);
        }
        else echo 'id is not found';
    }

}
