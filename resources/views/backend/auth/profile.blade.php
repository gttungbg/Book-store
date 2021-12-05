@extends('backend.master.master')
@section('title')
    <title>{{ __('Profile') }}</title>
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Your business dashboard template</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">App</a></li>
                        <li class="breadcrumb-item active"><a href="">Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo"></div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{ asset('backend/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ __($profile->name) }}</h4>
                                        <p>UX / UI Designer</p>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="text-muted mb-0">{{ __($profile->email) }}</h4>
                                        <p>Email</p>
                                    </div>
                                    <div class="dropdown ml-auto">
                                        <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown"
                                           aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                </g>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-169px, 30px, 0px);">
                                            <li class="dropdown-item"><i
                                                    class="fa fa-user-circle text-primary mr-2"></i> View profile
                                            </li>
                                            <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add
                                                to close friends
                                            </li>
                                            <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add
                                                to group
                                            </li>
                                            <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item active show">
                                            <a href="#profile-settings" data-toggle="tab" class="nav-link">{{ __('Setting')}}</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="profile-settings" class="tab-pane fade active show">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    <h4 class="text-primary">{{ __('Account Setting') }}</h4>
                                                    <form action="{{ route('profile.update',['id' => $profile->id]) }}" method="post">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name">{{ __('Name') }}</label>
                                                                <input type="text" id="name" value="{{ old('name',$profile->name) }}" name="name"
                                                                        class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="password">{{ __('Password') }}</label>
                                                                <input type="password" id="password"  class="form-control" name="password">
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">
                                                            Submit
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
