<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('category.index') }}">
                    <i class="flaticon-381-menu-1"></i>
                    {{ __('Category') }}
                </a>
            </li>
            <li>
                <a href="{{ route('publisher.index') }}">
                    <i class="flaticon-381-bookmark-1"></i>
                    {{ __('Publisher') }}
                </a>
            </li>
            <li>
                <a href="{{ route('author.index') }}">
                    <i class="flaticon-381-pencil"></i>
                    {{ __('Authors') }}
                </a>
            </li>
            <li>
                <a href="{{ route('book.index') }}">
                    <i class="fa fa-book"></i>
                    {{ __('Books') }}
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="flaticon-381-user-7"></i>
                    {{ __('User') }}
                </a>
            </li>
            <li>
                <a href="{{ route('comment.index') }}">
                    <i class="flaticon-381-smartphone"></i>
                    {{ __('Comment') }}
                </a>
            </li>
            <li>
                <a href="{{ route('borrow.index') }}">
                    <i class="flaticon-381-notebook"></i>
                    {{ __('Borrow') }}
                </a>
            </li>
        </ul>
    </div>
</div>
