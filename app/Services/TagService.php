<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Response;

class TagService
{
    public static function  createTags(array $data): Tag {

        return Tag::create($data);

    }

    public static function update(int $id) {
        $data = [
            'title' => 'jojo update post',

        ];
        $tag = Tag::find($id);
        if ($tag) {
            return $tag->update($data);
        }
        else echo 'id is not found';
    }

    public static function delete($id) {
        Tag::findOrFail($id)->delete();
        return response(['message' => 'post deleted'], Response::HTTP_OK);
    }

}
