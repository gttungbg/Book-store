@extends('backend.master.master')
@section('title')
    <title>{{ __('Borrow') }}</title>
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @include('backend.layouts.header_content',['name' => __('Borrow')])
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                            <tr>
                                <th style="width:50px;">
                                    <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                        <label class="custom-control-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th><strong>ROLL NO.</strong></th>
                                <th><strong>{{ __('user') }}</strong></th>
                                <th><strong>{{ __('book') }}</strong></th>
                                <th><strong>{{ __('date') }}</strong></th>
                                <th><strong>{{ __('action') }}</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($borrowDetail))
                                    @foreach($borrowDetail as $key => $borrow)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                        required="">
                                                    <label class="custom-control-label" for="customCheckBox2"></label>
                                                </div>
                                            </td>
                                            <td><strong>{{ $key }}</strong></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="w-space-no">{{ __($borrow->users->email) }}</span>
                                                </div>
                                            </td>
                                            <td>{{ $borrow->books->title }}</td>
                                            <td>
                                                <ul>
                                                    <li>{{ __('Request Date') .': '. $borrow->borrows->request_date }}</li>
                                                    <li>{{ __('Borrow Date') .': '. $borrow->borrows->borrow_date }}</li>
                                                    <li>{{ __('Return Date') .': '. $borrow->borrows->return_date }}</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>{{ __('Amount') .': '. number_format($borrow->price) }} VND</li>
                                                    <li>{{ __('Quantity') .': '. number_format($borrow->quantity) }}</li>
                                                </ul>
                                            </td>    
                                            <td>
                                                {!! $borrow->borrows->status !!}
                                            </td>                                    
                                        </tr>
                                    @endforeach
                                 @endif
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{ asset('backend/js/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert2/delete.js') }}"></script>
@endsection
