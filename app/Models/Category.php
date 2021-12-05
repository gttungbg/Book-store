<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'description'
    ];

    public function child()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
