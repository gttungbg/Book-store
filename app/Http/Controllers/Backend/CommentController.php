<?php

namespace App\Http\Controllers\Backend;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['books','users'])->get();
        return view('backend.comment.index',compact('comments'));
    }
}
