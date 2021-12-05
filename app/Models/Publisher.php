<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends BaseModel
{
    use SoftDeletes;

    protected $table = 'publishers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description'
    ];
    public function publishers()
    {
        return $this->hasMany(Book::class, 'publisher_id');
    }
}
