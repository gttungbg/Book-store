<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends BaseModel
{
    use HasFactory,SoftDeletes;

    public $table = 'authors';

    protected $primaryKey = 'id';

    // protected $dates = [
    //     'deleted_at',
    //     'created_at',
    //     'updated_at'
    // ];

    protected $fillable = [
        'name',
        'date_of_birth'
    ];
}
