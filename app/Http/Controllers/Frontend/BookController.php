<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function addToCart($id)
    {
        try {
            $book = $this->book->find($id);
            if ($book->quantity == 0)
            {
                return response()->json([
                    'code'    => 201,
                    'message' => 'error'
                ],201);
            }
            else
            {
                $cart = session()->get('cart');
                if(isset($cart[$id])) 
                {
                    $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
                }
                else 
                {
                    $cart[$id] = [
                        'title'    => $book->title,
                        'price'    => $book->price,
                        'quantity' => 1
                    ];
                }
                session()->put('cart', $cart);
                return response()->json([
                    'code'    => 200,
                    'message' => 'success'
                ],200);
            }
        }
        catch (\Exception $exception) {
            abort(500);
        }
    }

    public function showCart()
    {
        $carts = session()->get('cart');
        return view('frontend.cart',compact('carts'));
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cart_component = view('frontend.cart', compact('carts'));
            return response()->json([
                'cart_component' => $cart_component,
                'code'           => 200
             ], 200);
        }
    }
}
