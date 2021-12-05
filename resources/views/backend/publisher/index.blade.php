@extends('backend.master.master')
@section('title')
    <title>{{ __('Publisher') }}</title>
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @include('backend.layouts.header_content',['name' => __('Publisher')])
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('publisher.create') }}" class="btn btn-info shadow sharp">
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
                                <th><strong>ROLL NO.</strong></th>
                                <th><strong>{{ __('NAME') }}</strong></th>
                                <th><strong>{{ __('DESCRIPTION') }}</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $stt = 0 ?>
                            @if(isset($publishers))
                                @foreach($publishers as $publisher)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                       required="">
                                                <label class="custom-control-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td><strong>{{ $stt }}</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="w-space-no">{{ __($publisher->name) }}</span>
                                            </div>
                                        </td>
                                        <td>{{ __($publisher->description) }}</td>
                                        <td>{{ __($publisher->parent_id) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('publisher.edit',['id' => $publisher->id]) }}"
                                                   class="btn btn-primary shadow sharp mr-1">
                                                    Edit
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="" class="btn btn-danger shadow sharp action-delete"
                                                   data-url="{{ route('publisher.delete',['id' => $publisher->id]) }}">
                                                    Delete
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $stt++; ?>
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
