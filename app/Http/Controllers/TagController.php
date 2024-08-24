<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Models\Tag;
use App\Services\PostService;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {

        return Tag::all();
    }

    public function create() {

        $data = [
            'title' => 'new Tag2',
        ];
        TagService::createTags($data);
    }

    public function update($id)
    {
        TagService::update( $id);

    }

    public function delete(int $id) {
        return TagService::delete($id);
    }

}
