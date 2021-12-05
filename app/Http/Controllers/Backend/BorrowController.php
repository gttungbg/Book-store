<?php

namespace App\Http\Controllers\Backend;
use App\Models\Borrow;
use App\Models\BorrowDetail;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    private $borrow, $borrowDetail;

    public function __construct(Borrow $borrow, BorrowDetail $borrowDetail)
    {
        $this->borrow = $borrow;
        $this->borrowDetail = $borrowDetail;
    }

    public function index()
    {
        $borrows = $this->borrow->with(['users'])->get();
        return view('backend.borrow.index', compact('borrows'));
    }

    public function updateStatus(Request $request, $id)
    {
        $borrowUpdate = $this->borrow->findOrFail($id);
        $borrowUpdate->update([
            'status' => $request->status
        ]);
        return redirect()->back()->with('success',__('Updated status success'));
    }

    public function show($id)
    {
        $borrowDetail = $this->borrowDetail->with(['users','borrows','books'])->where('borrow_id', $id)->get();
        return view('backend.borrow.show', compact('borrowDetail'));
    }

}