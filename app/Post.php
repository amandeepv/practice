<?php

namespace App;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    
    public static function store($request)
    {
        $record = new Post();
        $record->name = "bhcbhf";
        $record->email = "g@gamil.com";
        $comment = Comment::findOrFail(2);
        $record->comment()->associate($comment);
        $record->save();
    }
}

