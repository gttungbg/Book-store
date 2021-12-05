@extends('backend.master.master')
@section('title')
    <title>{{ __('Create User') }}</title>
@endsection
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @include('backend.layouts.header_content',['name' => __('User')])
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('user.store') }}" method="post">
                                    @csrf
                                    @include('backend.user.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
