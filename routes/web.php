<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
// Роуты для сущности @ POST @
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}/show', [PostController::class, 'show']);
Route::get('/posts/store', [PostController::class, 'store']);
Route::get('/posts/{id}/update', [PostController::class, 'update']);
Route::get('/posts/{id}/destroy', [PostController::class, 'destroy']);

// Роуты для сущности @ USER @нуы

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/store', [UserController::class, 'create']);
Route::get('/users/{user}/show', [UserController::class, 'show']);
Route::get('/users/{id}/update', [UserController::class, 'update']);
Route::get('/users/{id}/destroy', [UserController::class, 'destroy']);

//Роуты для сущности @ Comment @

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/{$id}/show', [CommentController::class, 'show']);
Route::get('/comments/store', [CommentController::class, 'createComments']);
Route::get('/comments/{id}/update', [CommentController::class, 'update']);
Route::get('/comments/{id}/destroy', [CommentController::class, 'deleteComments']);

//Роуты для сущности @ Tag @

Route::get('/tags/', [TagController::class, 'index']);
Route::get('/tags/store', [TagController::class, 'create']);
Route::get('/tags/{id}/update', [TagController::class, 'update']);
Route::get('/tags/{id}/destroy', [TagController::class, 'delete']);

//Роуты для сущности @ Category @

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/store', [CategoryController::class, 'create']);
Route::get('/categories/{id}/update', [CategoryController::class, 'update']);
Route::get('/categories/{id}/destroy', [CategoryController::class, 'delete']);

//Роуты для сущности @ Profile @

Route::get('/profiles/', [ProfileController::class, 'index']);
Route::get('/profiles/store', [ProfileController::class, 'create']);
Route::get('/profiles/{id}/update', [ProfileController::class, 'update']);
Route::get('/profiles/{id}/destroy', [ProfileController::class, 'delete']);
