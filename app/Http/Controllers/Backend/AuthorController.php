<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::all();
        return view('backend.author.index', compact('authors'));
    }

    public function create()
    {
        return view('backend.author.create');
    }

    public function store(AuthorRequest $request)
    {
        Author::create($request->all());
        return redirect()->back()->with('success', __('Created Author'));
    }

    public function edit($id)
    {
        $authors = Author::findOrFail($id);
        return view('backend.author.edit', compact('authors'));
    }

    public function update(AuthorRequest $request, $id)
    {
        $data = [
            'name'          => $request->name,
            'date_of_birth' => $request->date_of_birth
        ];
        Author::whereId($id)->update($data);
        return redirect(route('author.index'))->with('success', __('Updated Author'));
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect(route('author.index'))->with('danger', __('Delete author'));
    }
}
