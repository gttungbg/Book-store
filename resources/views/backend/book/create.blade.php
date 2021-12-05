@extends('backend.master.master')
@section('title')
    <title> Book</title>
@endsection
@section('css')
    <link href="{{ asset('backend/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @include('backend.layouts.header_content',['name' => __('Book')])
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @include('backend.book.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('backend/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/js/select2-init.js') }}"></script>
@endsection
