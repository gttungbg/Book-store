<?php

namespace App\Http\Controllers\Frontend;
use App\Models\BorrowDetail;

class UserController extends Controller
{

    public function index($id)
    {
        $borrowDetail = BorrowDetail::with(['users','borrows','books'])->where('user_id',auth()->id())->get();
        return view('frontend.profile',compact('borrowDetail'));
    }
}