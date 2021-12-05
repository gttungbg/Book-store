<?php

namespace App\Services;

use App\Models\User;
use App\Traits\DeleteTrait;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService
{
    use DeleteTrait;

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user->get();
    }

    public function store($request)
    {
        $this->user->name         = $request->name;
        $this->user->email        = $request->email;
        $this->user->password     = Hash::make($request->password);
        $this->user->address      = $request->address;
        $this->user->phone_number = $request->phone;
        return $this->user->save();
    }

    public function detail($id)
    {
        return $this->user->findOrFail($id);
    }

    public function update($request, $id)
    {
        $editUser = $this->detail($id);
        $editUser->name         = $request->name;
        $editUser->email        = $request->email;
        $editUser->password     = Hash::make($request->password);
        $editUser->address      = $request->address;
        $editUser->phone_number = $request->phone;
        return $editUser->save();
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->user);
    }
}
