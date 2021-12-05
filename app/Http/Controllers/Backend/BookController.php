<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Book\BookRequestAdd;
use App\Http\Requests\Book\BookRequestUpdate;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index(Request $request)
    {
        $books = $this->bookService->index($request);
        $categories = $this->bookService->getCategory();
        $publishers = $this->bookService->getPublisher();
        $authors    = $this->bookService->getAuthor();
        return view('backend.book.index', compact('books', 'categories', 'authors', 'publishers'));
    }

    public function create()
    {
        $categories = $this->bookService->getCategory();
        $publishers = $this->bookService->getPublisher();
        $authors    = $this->bookService->getAuthor();
        return view('backend.book.create', compact('categories', 'publishers', 'authors'));
    }

    public function store(BookRequestAdd $request)
    {
        $this->bookService->store($request);
        return redirect()->back()->with('success', __('Created success'));
    }

    public function edit($id)
    {
        $categories = $this->bookService->getCategory();
        $publishers = $this->bookService->getPublisher();
        $authors    = $this->bookService->getAuthor();
        $editBook   = $this->bookService->detail($id);
        $bookAuthor = $editBook->author;
        return view('backend.book.edit', compact('categories', 'publishers', 'authors', 'editBook', 'bookAuthor'));
    }

    public function update(BookRequestUpdate $request, $id)
    {
        $this->bookService->update($request, $id);
        return redirect()->back()->with('success', __('Updated success'));
    }

    public function delete($id)
    {
        return $this->bookService->delete($id);
    }
}
