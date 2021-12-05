<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/images/EbookStore-Logo.png') }}" alt="EbookStore-Logo"
                    /></a>
            </div>
            <!----------  Nav Bar ------------------>
            <nav>
                <ul id="MenuItems">
                    {{-- <li><a href="">Home</a></li> --}}
                    <li><a href="{{ route('book.show') }}">Ebooks</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    @if (auth()->check())
                        <li><a href="{{ route('profile.index',['id' => auth()->user()->id]) }}">
                            {{ __('Welcome') .' '. auth()->user()->name }}</a></li>
                        <li><a href="{{ route('auth.logout') }}">{{ __('Logout') }}</a></li>
                    @else
                        <li><a href="{{ route('login') }}">{{  __('Login') }}</a></li>
                        <li><a href="{{ route('auth.register') }}">{{  __('Register') }}</a></li>
                    @endif
                </ul>
            </nav>
            <a href="{{ route('cart.index') }}">
                <img
                    src="{{ asset('frontend/images/cart.png') }}"
                    alt="Shoping Cart"
                    width="28px"
                    height="28px"
                    style="margin-left: 10px; margin-top: 15px"
                />
            </a>
            <img src="{{ asset('frontend/images/menu.png') }}" class="menu-icon" onclick="menutoggle()"/>
        </div>

    </div>
</div>

