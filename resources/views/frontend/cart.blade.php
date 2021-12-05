@extends('frontend.master.master')
@section('title')
    <title>{{ __('Home') }}</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/comment.css') }}">
@endsection
@section('content')
    <div class="small-container cart-page">
        <table class="update-cart-url" data-url="{{ route('cart.update') }}">
            <tr>
                <th>Ebook</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Update</th>
            </tr>
            <tbody>
            @if (isset($carts))
                <?php $total = 0 ?>
                @foreach($carts as $id => $cart)
                    <?php $total += $cart['quantity'] * $cart['price'] ?>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="{{ asset('frontend/images/Book 16.jpg') }}" alt="Book 16"/>
                                <div>
                                    <p>{{ $cart['title'] }}</p>
                                    <small>Price: {{ number_format($cart['price']) }}</small> <br/>
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" name="quantity" min="1" class="cart_quantity_input" value="{{ $cart['quantity'] }}"/></td>
                        <td>{{ number_format($cart['quantity'] * $cart['price']) }} Vnđ</td>
                        <td>
                            <a class="btn btn-info cart_update" href="" data-id="{{ $id }}"><i class="fa fa-edit "></i></a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>
                        {{ __('NO DATA') }}
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
        <div class="total-price">
            @if (isset($total))
                <table>
                    <tr>
                        <td>Total</td>
                        <td>{{ number_format($total) }}</td>
                        <td><a href="{{ route('checkout.index') }}" class="btn btn-primary" style="font-size: 20px">Checkout</a></td>
                    </tr>
                </table>
            @endif
        </div>
    </div>
@endsection
@section('js')
<script src="{{ asset('frontend/js/action.js') }}"></script>
@endsection

