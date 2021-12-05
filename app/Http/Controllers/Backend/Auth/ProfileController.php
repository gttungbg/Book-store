<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Backend\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    private $admin;

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function index($id)
    {
        $profile = $this->admin->findOrFail($id);
        return view('backend.auth.profile', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $updateAdmin           = $profile = $this->admin->findOrFail($id);
        $updateAdmin->name     = $request->name;
        $updateAdmin->password = empty($request->password) ? $updateAdmin->password : Hash::make($request->password);
        $updateAdmin->save();
        return redirect()->back()->with('success', __('Updated your profile'));
    }
}
