<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $posts = Post::first();
//        $comments = Comment::first();
//        $categories = Category::first();
//        $tags = Tag::first();
//        $profile = Profile::first();



//        $profile = Profile::first();
//        $profile->post()->create([
//            'title' => 'new record post',
//            'category_id' => 1,
//
//        ]);



//        $posts = Post::first();
//        $posts->tag()->updateExistingPivot(1,[
//            'status' => 1
//        ]);

        $category = Category::first();
        $comment = Comment::first();
        dd($comment->category);



    }
}
        //* Seeders, Events, Listeners, Observers, Factory


                //* RelationShip

        //belongsTo => записываем тем, которые принадлежат кому-то.
        //hasOne => имеет одного?
        //hasMany => имеет многих?
        //belongsToMany => многие ко многим через промежуточную таблицу.

                //* Методы работы с пивот-таблицами

        //attach
        //detach
        //sync
        //syncWithoutDetaching
        //toggle
        //updateExistingPivot => обновление данных в пивот-таблицах, если  НЕТ модели (таблица post_tag)


                //* Отношения "ЧЕРЕЗ"

           //hasManyThrough
           //hasOneThrough
           //инверсионный доступ через связи. public function category() {
            //        return $this->post()->category();
            //    }

                //* softDeletes -> нужно для того, что бы была возможность восстановить удаленные данные. Это работает на уровне SQL.
               //* withTrashed() -> будет смотерь в мусорке, т.е. мы увидим свой удаленный ID.
              //* restore() -> метод восстановления данных, после delete(). softDelete.


        //* Апдейты миграций.
        //php .\artisan make:migration add_field_in_posts_table => добавим колонку "field"
        //php .\artisan make:migration drop_field_in_posts_table => удалим колонку.
        //после создания, делаем: php .\artisan migrate:rollback => откатим изменения.
        //php .\artisan make:migration change_title_in_posts_table => изменим тип данных у колонки "title"
        //php .\artisan make:migration rename_content_in_posts_table => ренейм имени колонки "content"
        //$table->foreignId('category_id')->index()->nullable()->constrained('categories'); => добавили FK.
        //php .\artisan make:migration change_title_index_in_posts_table => добавление Index
        //$table->string('title')->index()->change();
        //$table->string('title')->index(false)->change(); => rollback
