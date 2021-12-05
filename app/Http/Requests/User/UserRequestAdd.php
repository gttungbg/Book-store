<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class UserRequestAdd extends BaseRequest
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
            'email' => [
                'required',
                'unique:users,email',
                'email'
            ],
            // 'phone_number' => [
            //     'required',
            //     'size:10'
            // ],
            'address' => [
                'required',
                'string'
            ],
            'password' => [
                'required',
                'min:6',
                // 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            ]
        ];
    }
}
