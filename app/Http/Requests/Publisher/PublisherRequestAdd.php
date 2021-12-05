<?php

namespace App\Http\Requests\Publisher;

use App\Http\Requests\BaseRequest;

class PublisherRequestAdd extends BaseRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'min:5',
                'max:30'
            ],
            'description' => [
                'required',
                'string',
                'min:5',
            ],
        ];
    }
}
