<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Response;

class CategoryService
{
    public static function create(array $data): Category {
        return Category::create($data);
    }

    public static function update(Category $category, array $data): Category {
        $data = [
            'title' => 'API update title category ',

        ];

        $category->update($data);
        return $category;


    }

    public static function delete_by_id(Category $category)   {

        $category->delete();
        return response(['message' => 'post deleted'], Response::HTTP_OK);
    }

    public static function index() {
        return Category::all();
    }


}
