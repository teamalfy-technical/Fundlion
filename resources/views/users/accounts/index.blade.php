<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}" ></script>

@extends('users.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <div class="layout-main">

        <div class="layout-content">

            {{--New User Account Modal--}}
            <div id="store" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="blue-theme card-title text-center">{{__("Create New User Account")}}</h5>
                        </div>

                        <form action="{{ route('users.accounts.store') }}" method="post" role="form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-right text-md-right">{{ __('Full Name:') }}</label>

                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-right text-md-right">{{ __('E-Mail Address:') }}</label>

                                                <div class="col-md-8">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="phone" class="col-md-4 col-form-label text-right text-md-right">{{ __('Phone Number:') }}</label>

                                                <div class="col-md-8">
                                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="role_id" class="col-md-4 col-form-label text-right text-md-right">User Role</label>
                                                <div class="col-md-8">
                                                    <select id="role_id" name="role_id" class="form-control">
                                                        <option readonly="true" hidden>Select...</option>
                                                        <option value="1">Administrator</option>
                                                        <option value="2">Account Manager</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="active" class="col-md-4 col-form-label text-right text-md-right">Account Status</label>
                                                <div class="col-md-8">
                                                    <select id="active" name="active" class="form-control">
                                                        <option readonly="true" hidden>Select...</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Not Active</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">{{__("Create")}}</button>
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Close")}}</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            @foreach($users as $all_users)
                {{--Update User Account Modal--}}
                <div id="update{{$all_users->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="blue-theme card-title text-center">{{__("Update User Account")}}</h5>
                            </div>
                            <form action="{{ route('users.accounts.update',$all_users->id) }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-right text-md-right">{{ __('Full Name:') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $all_users->name }}" required autocomplete="name">

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-right text-md-right">{{ __('E-Mail Address:') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $all_users->email }}" required autocomplete="email">

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="phone" class="col-md-4 col-form-label text-right text-md-right">{{ __('Phone Number:') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $all_users->phone }}" required autocomplete="phone">

                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="role_id" class="col-md-4 col-form-label text-right text-md-right">{{ __('User Role:') }}</label>

                                                    <div class="col-md-8">
                                                        <label for="role_id">Admin </label>&nbsp;
                                                        <input type="radio" name="role_id" id="role_id" value="1" @if($all_users->role_id === 1) checked @endif>
                                                        &emsp;
                                                        <label for="role_id">Account Manager </label>&nbsp;
                                                        <input type="radio" name="role_id" id="role_id" value="2" @if($all_users->role_id === 2) checked @endif>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">{{__("Save")}}</button>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Cancel")}}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                {{--Delete User Account Modal--}}
                <div id="delete{{$all_users->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="blue-theme card-title text-center">{{__("Delete User Account")}}</h5>
                            </div>
                            <form action="{{ route('users.accounts.destroy',$all_users->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5><span class="text-danger text-center">Are you sure you want to delete this account? This cannot be undone!</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">{{__("Yes")}}</button>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("No")}}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            @endforeach

            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100%;">

                <div class="row gutter-xs">
                    <div class="col-lg-10 col-lg-offset-1">
                        @component('components.messages')@endcomponent
                        <h2 style="color: #000000;font-weight: 900;">Hi Admin<!-- , <span style="font-weight: 100;">Here are your Loans --></h2>
                    </div>
                </div>
                <div class="row" style="margin-top:50px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-6 col-md-6">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#store">Create New Account</button>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-sm-5 control-label" style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search Account</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <label class="btn btn-default file-upload-btn"><span class="icon icon-search icon-lg"></span></label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:50px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <!-- <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;"> -->
                        <div class="row gutter-xs">
                            <div class="col-lg-12">
                                <table class="table table-hover table-borderless" style="background-color: #e0e0e0;">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Full Name</th>
                                        <th class="text-left">Avatar</th>
                                        <th class="text-left">Email Address</th>
                                        <th class="text-left">Phone Number</th>
                                        <th class="text-left">Admin Role</th>
                                        <th class="text-left">Date Created</th>
                                        <th class="text-left">Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $all_users)
                                    <tr class="white-rows">
                                        <td class="text-left"><b>{{$all_users->name}}</b></td>
                                        <td class="text-left">
                                            @if($all_users->avatar !== null)<img class="circle" src="{{asset("storage/app/users/$all_users->id/avatar/$all_users->avatar")}}" width="30" height="30" alt="" />
                                            @else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="30" height="30" /> @endif
                                        </td>
                                        <td class="text-left">{{$all_users->email}}</td>
                                        <td class="text-left">{{$all_users->phone}}</td>
                                        <td class="text-left">{{$all_users->userRole['role']}} @if($all_users->userRole['role'] === null) Unassigned @endif</td>
                                        <?php
                                        $date = date('d/m/y', strtotime($all_users->created_at));
                                        ?>
                                        <td class="text-left">{{$date}}</td>
                                        <td class="text-left"><span class="expand-account icon icon-plus" data-toggle="collapse" data-target="#detail{{$all_users->id}}" class="clickable"></span></td>
                                    </tr>
                                    <td style="padding: 0;" colspan="7">
                                        <div id="detail{{$all_users->id}}" class="collapse">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <form action="{{ route('users.accounts.update') }}" method="post">
                                                            @csrf

                                                            <div class="col-lg-8 col-md-8">
                                                                <div class="form-group col-md-4">
                                                                    <label for="name" class="text-dark">Full Name</label>
                                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $all_users->name }}" required autocomplete="name">

                                                                    @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="email" class="text-dark">Email</label>
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $all_users->email }}" required autocomplete="email">

                                                                    @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="phone" class="text-dark">Phone Number</label>
                                                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $all_users->phone }}" required autocomplete="phone">

                                                                    @error('phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="role_id" class="text-dark">User Role</label>
                                                                    <select id="role_id" name="role_id" class="form-control">
                                                                        <option value="1" @if($all_users->role_id === 1) selected @endif>Administrator</option>
                                                                        <option value="2" @if($all_users->role_id === 2) selected @endif>Account Manager</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="active" class="text-dark">Account Status</label>
                                                                    <select id="active" name="active" class="form-control">
                                                                        <option value="1" @if($all_users->active === 1) selected @endif>Active</option>
                                                                        <option value="0" @if($all_users->active === 0) selected @endif>Not Active</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <input type="hidden" name="id" value="{{$all_users->id}}">
                                                                <button type="button" class="btn btn-danger" style="width: 100%; margin: 25px 0 15px 0;" data-toggle="modal" data-target="#delete{{$all_users->id}}">Delete Account</button>
                                                                <button type="submit" class="btn btn-success" style="width: 100%; margin: 25px 0 15px 0;">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Users Data Table -->

                <!-- Table Pagination-->
                {{--<div class="row" style="margin-top: 30px;">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">--}}
                            {{--<ul class="pagination">--}}
                                {{--<li class="paginate_button first disabled" id="demo-datatables-5_first">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="0" tabindex="0">First</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button previous disabled" id="demo-datatables-5_previous">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="1" tabindex="0">«</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button active">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="2" tabindex="0">1</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button ">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="3" tabindex="0">2</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button ">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="4" tabindex="0">3</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button ">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="5" tabindex="0">4</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button ">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="6" tabindex="0">5</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button ">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="7" tabindex="0">6</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button next" id="demo-datatables-5_next">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="8" tabindex="0">»</a>--}}
                                {{--</li>--}}
                                {{--<li class="paginate_button last" id="demo-datatables-5_last">--}}
                                    {{--<a href="#" aria-controls="demo-datatables-5" data-dt-idx="9" tabindex="0">Last</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.expand-account').on('click', function () {
                $(this).toggleClass("icon-minus");
            })
        });
    </script>

@endsection