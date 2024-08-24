<?php

namespace App\Http\Controllers;

use App\Http\Resources\Comment\CommentResource;
use App\Http\Resources\Post\PostResource;
use App\Models\Comment;
use App\Models\Post;
use App\Services\CommentService;
use App\Services\PostService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {

        return Comment::collection(Comment::all())->resolve();
    }

    public function show(Comment $post) {

        return CommentResource::make($post)->resolve();
    }

    public function createComments() {

        $data = [
            'user' => '2',
            'post' => 'Comments',
            'content' => 'post content',
            'likes' => 3,
        ];
        CommentService::addComment($data);

    }

    public function deleteComments(int $id) {
        return CommentService::deleteComment($id);
    }


    public function update(int $id) {
        CommentService::updateComment($id, $_POST);
    }




}
