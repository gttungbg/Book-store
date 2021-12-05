<?php

namespace App\Http\Requests;

class AuthorRequest extends BaseRequest
{

    public function rules()
    {
        return [
            'name'          => 'required|string|min:8',
            'date_of_birth' => 'required|date'
        ];
    }

}
