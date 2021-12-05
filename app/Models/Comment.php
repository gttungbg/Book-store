<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends BaseModel
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'book_id',
        'user_id',
        'comment'
    ];

    public function books()
    {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
