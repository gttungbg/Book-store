<?php

namespace App\Services;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Traits\DeleteTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Str;

class BookService extends BaseService
{
    use StorageImageTrait;
    use DeleteTrait;

    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function index($request)
    {
        if ($request->has('category_id') || $request->has('publisher_id'))
        {
            $books = $this->book->newQuery()->with([ 'category', 'publisher', 'images', 'author' ])
                ->where('category_id', $request->category_id)
                ->orWhere('publisher_id', $request->publisher_id)
                ->get();
        }
        else
        {
            $books = $this->book->newQuery()->with([ 'category', 'publisher', 'images', 'author' ])->get();
        }
        return $books;
    }

    public function getCategory()
    {
        return Category::all();
    }

    public function getPublisher()
    {
        return Publisher::all();
    }

    public function getAuthor()
    {
        return Author::all();
    }

    public function detail($id)
    {
        return $this->book->findOrFail($id);
    }

    public function store($request)
    {
        $data = [
            'isbn'           => $request->isbn, 'category_id' => $request->category_id,
            'publisher_id'   => $request->publisher_id, 'title' => $request->title,
            'slug'           => Str::slug($request->title), 'size' => $request->size,
            'description'    => $request->description, 'number_of_page' => $request->number_of_page,
            'quantity'       => $request->quantity, 'publish_date' => $request->publish_date,
            'price'          => $request->price, 'admin_id' => auth()->guard('admin')->id()
        ];

        $bookCreate = $this->book->create($data);

        if($request->hasFile('url')) {
            foreach ($request->url as $fileItem) {
                $dataBook = $this->storageTraitUploadMultiple($fileItem, 'book');
                $bookCreate->images()->create([
                                                  'url' => $dataBook['url'], 'title' => $dataBook['title']
                                              ]
                );
            }
        }
        $bookCreate->author()->attach($request->authors);
        return $bookCreate;
    }

    public function update($request, $id)
    {
        $dataUpdate = [
            'isbn'           => $request->isbn, 'category_id' => $request->category_id,
            'publisher_id'   => $request->publisher_id, 'title' => $request->title,
            'slug'           => Str::slug($request->title), 'size' => $request->size,
            'description'    => $request->description, 'number_of_page' => $request->number_of_page,
            'quantity'       => $request->quantity, 'publish_date' => $request->publish_date,
            'price'          => $request->price, 'admin_id' => auth()->guard('admin')->id()
        ];

        $bookUpdate = $this->detail($id);
        $bookUpdate->update($dataUpdate);
        if($request->hasFile('url')) {
            foreach ($request->url as $fileItem) {
                $dataBook = $this->storageTraitUploadMultiple($fileItem, 'book');
                $bookUpdate->images()->create([
                                                  'url' => $dataBook['url'], 'title' => $dataBook['title']
                                              ]
                );
            }
        }
        $bookUpdate->author()->sync($request->authors);
        return $bookUpdate;
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->book);
    }
}
