<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\User\UserRequestAdd;
use App\Http\Requests\User\UserRequestUpdate;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getUser();
        return view('backend.user.index',compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(UserRequestAdd $request)
    {
        $this->userService->store($request);
        return redirect()->back()->with('success',__('Created user'));
    }

    public function edit($id)
    {
        $editUser = $this->userService->detail($id);
        return view('backend.user.edit',compact('editUser'));
    }

    public function update(UserRequestUpdate $request, $id)
    {
        $this->userService->update($request, $id);
        return redirect()->back()->with('success',__('Updated user'));
    }

    public function delete($id)
    {
         return $this->userService->delete($id);
    }
}
