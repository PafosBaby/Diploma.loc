<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            'comment' => 'required|min:10'
        ]);

        Comment::add($request->all(),$article);

        return back();
    }
}
