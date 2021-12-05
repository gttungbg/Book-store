<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BorrowDetail extends BaseModel
{
    use HasFactory;

    protected $table = 'borrow_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'borrow_id',
        'book_id',
        'quantity',
        'price'
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->beLongsTo(User::class,'user_id');
    }

    public function borrows()
    {
        return $this->beLongsTo(Borrow::class,'user_id');
    }

    public function books()
    {
        return $this->beLongsTo(Book::class,'user_id');
    }
}
