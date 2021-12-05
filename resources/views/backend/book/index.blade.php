@extends('backend.master.master')
@section('title')
    <title>Books</title>
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @include('backend.layouts.header_content',['name' => __('Books')])
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('search.book') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="">{{ __('Category') }}</label>
                                <select class="form-control" name="category_id">
                                    <option value="">---{{ __('Pls chose') }}---</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">{{ __('Publisher') }}</label>
                                <select class="form-control" name="publisher_id">
                                    <option value="">---{{ __('Pls chose') }}---</option>

                                    @foreach($publishers as $publisher)
                                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">{{ __('Author') }}</label>
                                <select class="form-control" name="author_id">
                                    <option value="">---{{ __('Pls chose') }}---</option>
                                    @foreach($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-3">
                            <button type="submit" name="filter" id="filter" class="btn btn-info">Filter</button>
                            <a href="{{ route('book.index') }}" class="btn btn-warning">Reset</a>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <a href="{{ route('book.create') }}" class="btn btn-info shadow sharp">
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
                                <th><strong>{{ __('isbn') }}</strong></th>
                                <th><strong>{{ __('title') }}</strong></th>
                                <th><strong>{{ __('information') }}</strong></th>
                                <th><strong>{{ __('quantity') }}</strong></th>
                                <th><strong>{{ __('price') }}</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $key => $book)
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
                                            <span class="w-space-no">{{ __($book->isbn) }}</span>
                                        </div>
                                    </td>
                                    <td>{{ __($book->title) }}</td>
                                    <td>
                                        <ul>
                                            <li>Category: {{ __($book->category->name) }}</li>
                                            <li>Publisher: {{ __($book->publisher->name) }}</li>
                                            <li>
                                                Author:
                                                @foreach($book->author as $bookAuthor)
                                                    {{ __($bookAuthor->name) }} <br>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{ __($book->quantity) }}</td>
                                    <td>{{ number_format($book->price) }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('book.edit',['id' => $book->id]) }}"
                                               class="btn btn-primary shadow sharp mr-1">
                                                Edit
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="" class="btn btn-danger shadow sharp action-delete"
                                               data-url="{{ route('book.delete',['id' => $book->id]) }}">
                                                Delete
                                                <i class="fa fa-trash"></i>
                                            </a>
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
