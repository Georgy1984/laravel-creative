<?php

namespace App\Console\Commands;

use App\Models\Post;
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
//        Post::create([
//            'title' => 'my post'
//        ]);
        $posts = Post::find(1);
        $posts->update([
            'title' => 'new post'
        ]);
    }
}
