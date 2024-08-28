<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
    public function likedByProfile() {
        return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id' , 'profile_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class);

    }









}
