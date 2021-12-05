<?php 

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\BorrowDetail;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    private $borrow, $borrowDetail;

    public function __construct(Borrow $borrow, BorrowDetail $borrowDetail)
    {
        $this->borrow = $borrow;
        $this->borrowDetail = $borrowDetail;
    }

    public function index()
    {
        $carts = session()->get('cart');
        return view('frontend.checkout', compact('carts'));
    }

    public function store(Request $request)
    {
        $carts = session()->get('cart');
        $amount = 0;
        foreach ($carts as $id => $cart) {
            $amount += $cart['price'] * $cart['quantity'];
        }
        $borrow = $this->borrow->create([
            'user_id'       => auth()->id(),
            'request_date'  => Carbon::now(),
            'borrow_date'   => $request->borrow_date,
            'return_date'   => $request->return_date,
            'amount'        => $amount,
            'deposit'       => $request->deposit,
            'note'          => $request->note
        ]);

        if ($borrow)
        {
            foreach ($carts as $id => $cart)
            {
                $this->borrowDetail->create([
                    'user_id'   => auth()->id(),
                    'book_id'   => $id,
                    'borrow_id' => $borrow->id,
                    'quantity'  => $cart['quantity'],
                    'price'     => $cart['price']
                ]);
            }
        }

        session()->flush('cart');
        return redirect()->route('checkout.index')->with('success',__('Comment Success'));


    }
}