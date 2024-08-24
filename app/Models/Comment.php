<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);


    }

    public function profile() {
        return $this->belongsTo(Profile::class);
    }

    public function category() {
        return $this->post->category();
    }



}
