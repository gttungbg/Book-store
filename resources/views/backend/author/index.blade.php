@extends('backend.master.master')
@section('title')
    <title>Author</title>
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @include('backend.layouts.header_content',['name' => __('Author')])
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('author.create') }}" class="btn btn-info shadow sharp">
                            {{ __('Add') }}
                            <i class="fa fa-pencil"></i>
                        </a>
                        <table class="table table-responsive-md">
                            <thead>
                            <tr>
                                <th style="width:50px;">
                                    <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                        <label class="custom-control-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th><strong>NO.</strong></th>
                                <th><strong>{{ __('name') }}</strong></th>
                                <th><strong>{{ __('date of birth') }}</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($authors as $key => $author)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                       required="">
                                                <label class="custom-control-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td><strong>{{ $key ++ }}</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="w-space-no">{{ __($author->name) }}</span>
                                            </div>
                                        </td>
                                        <td>{{ __($author->date_of_birth) }}</td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('author.edit', $author->id) }}"
                                                   class="btn btn-primary shadow sharp mr-1">
                                                    Edit
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('author.destroy', $author->id)}}" method="post" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" href="" class="btn btn-danger shadow sharp ">
                                                    Delete
                                                    <i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
