@extends('backend.master.master')
@section('title')
    <title>Author</title>
@endsection
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-3 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600 mb-0">{{ __('Author') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('author.update', $authors->id) }}" method="POST">
                                    @csrf
{{--                                    @method('PUT')--}}
                                    <div class="form-row">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" class="form-control" placeholder="Fullname" name="name" value="{{ $authors->name }}">
                                                {{-- value="{{ old('name', isset($editAuthor) ? $editAuthor->name : '') }}"> --}}
                                        @error('name')
                                        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="md-form md-outline input-with-post-icon datepicker">
                                        <label for="">{{ __('Date_of_birth')}}</label>
                                        <input placeholder="Select date" type="date" name="date_of_birth" id="example" class="form-control"
                                        value="{{ $authors->date_of_birth }}">
                                        @error('date_of_birth')
                                        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit <i class="flaticon-381-save"></i></button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
