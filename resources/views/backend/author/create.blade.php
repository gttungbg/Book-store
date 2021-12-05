@extends('backend.master.master')
@section('title')
    <title>{{ __('Author') }}</title>
@endsection
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @include('backend.layouts.header_content',['name' => __('Author')])
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('author.store') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" class="form-control" placeholder="HOANG VAN A" name="name"
                                               value="{{ old('name')  }}">
                                        @error('name')
                                        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="md-form md-outline input-with-post-icon datepicker">
                                        <label for="">{{ __('Date_of_birth')}}</label>
                                        <input placeholder="Select date" type="date" name="date_of_birth" id="example"
                                               class="form-control"
                                               value="{{ old('date_of_birth')  }}">
                                        @error('date_of_birth')
                                        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit <i
                                            class="flaticon-381-save"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
