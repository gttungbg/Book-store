<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'books';

    protected $primaryKey = 'id';

    protected $fillable = [
        'isbn', 'category_id', 'publisher_id', 'title', 'slug', 'description', 'size',
        'number_of_page', 'quantity', 'publish_date', 'price', 'view_count', 'admin_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function images()
    {
        return $this->hasMany(BookImage::class,'book_id');
    }

    public function author()
    {
        return $this->belongsToMany(Author::class,'book_authors','book_id','author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'book_id');
    }
}
