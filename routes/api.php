 <?php

 use App\Http\Controllers\Api\CategoryController;
 use App\Http\Controllers\Api\CommentController;
 use App\Http\Controllers\Api\PostController;
 use App\Http\Controllers\Api\ProfileController;
 use App\Http\Controllers\Api\TagController;
 use App\Http\Controllers\Api\UserController;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Route;




//Route::get('/posts', [PostController::class, 'index']);
//Route::get('/posts/{post}', [PostController::class, 'show']);
//Route::post('/posts', [PostController::class, 'store']);
//Route::patch('/posts/{post}', [PostController::class, 'update']);
//Route::delete('/posts/{post}', [PostController::class, 'destroy']);



//              Разобраться и сделать:
//      1. Прописать отношения на уровне sql(миграции)
//      2. Прописать отношения у всех сущностей в моделях
//      3. Вывести отношения в консолe. Для себя
//      4. Добавить softdelete бизнес-сущностям
//      5. Добавить для пивотов все 6 методов. (в консоль).
//      6. Добавить все отношения "через" которые я смогу найти.
//      7. Разобраться, что такое полиморфы. Реализовать полиморфы.
//      8. Один к одному - с профилем
//      9. Один ко многим - комментарии к посту и к видео
//      10. Многие ко многим - лайки постам и комментариям
//      11. Разобраться с полиморфами.


Route::ApiResource('posts', PostController::class);
Route::ApiResource('categories', CategoryController::class);
Route::ApiResource('comments', CommentController::class);
Route::ApiResource('profiles', ProfileController::class);
Route::ApiResource('tags', TagController::class);
Route::ApiResource('users', UserController::class);
