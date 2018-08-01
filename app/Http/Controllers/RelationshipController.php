<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class RelationshipController extends Controller
{
    public function index()
    {
        $comment = Comment::find(1);
        $comment = $comment->load('posts');
        return view('relation',compact('comment'));
    }
    public function create(Request $request)
    {
        return Post::store($request);
    }
}
