<?php

namespace App\Http\Requests\Book;

use App\Http\Requests\BaseRequest;

class BookRequestUpdate extends BaseRequest
{

    public function rules()
    {
        return [
            'isbn' => [
                'required',
                'unique:books,isbn,'. $this->id,
                'string',
                'min:6',
                'max:20'
            ],
            'title' => [
                'required',
                'string',
                'min:6',
                'max:30'
            ],
            'category_id' => [
                'required'
            ],
            'publisher_id' => [
                'required'
            ],
            'size' => [
                'required'
            ],
            'number_of_page' => [
                'required',
                'numeric',
                'max:1000',
                'min:0'
            ],
            'publish_date' => [
                'required',
            ],
            'price' => [
                'required',
                'min:0',
                'max:10000000',
            ],
            'quantity' => [
                'required',
                'min:0',
                'max:1000'
            ],
            'authors' => [
                'required'
            ],
//            'url' => [
//                'required',
//                'max:1000',
//                'mimes:jpeg,png,jpg'
//            ]
        ];
    }

}
