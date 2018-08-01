<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
