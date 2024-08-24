<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Services\CategoryService;
use App\Services\PostService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {

        Category::all();

    }

   public function create() {

        $data = [
            'title' => 'category title2',

        ];

        CategoryService::create($data);

    }

    public function update(int $id) {

        CategoryService::update($id);
    }

    public function delete(int $id) {

        return CategoryService::delete_by_id($id);

    }
}
