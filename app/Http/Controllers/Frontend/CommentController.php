<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postComment(Request $request, $idBook)
    {
        Comment::create([
            'book_id' => $idBook,
            'user_id' => auth()->id(),
            'comment' => $request->comment
         ]);
        return redirect()->back()->with('success',__('Comment Success'));
    }
}
