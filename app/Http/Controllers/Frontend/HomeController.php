<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Book;
use App\Models\BookImage;
use App\Models\Comment;

class HomeController extends Controller
{
    public function home()
    {
        $book_view = Book::with(['images'])->where('view_count', '>=', 5)->paginate(3);
        // dd($book_view);
        return view('frontend.index', compact('book_view'));
    }

    public function bookDetail($id)
    {
        $bookDetail = Book::with(['images', 'publisher', 'author'])->where('id', $id)->first();
        $comments = Comment::with(['books', 'users'])->get();
        return view('frontend.book_detail', compact('bookDetail', 'comments'));
    }

    public function allBooks()
    {
        $books = Book::with('images')->paginate(9);
        return view('frontend.books_show', compact('books'));
    }
}
