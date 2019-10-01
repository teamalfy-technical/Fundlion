<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

<!-- <script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}" ></script> -->
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/elephant.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/application.min.css')}}">


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
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('id') }}" required autocomplete="name">

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

            @foreach($data as $ldata)
                {{--Update User Account Modal--}}
                <div id="update{{$ldata->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="blue-theme card-title text-center">{{__("Update User Account")}}</h5>
                            </div>
                            <form action="{{ route('users.accounts.update',$ldata->id) }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-right text-md-right">{{ __('Full Name:') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $ldata->id }}" required autocomplete="name">

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
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $ldata->id }}" required autocomplete="email">

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
                                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $ldata->id }}" required autocomplete="phone">

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
                                                        <input type="radio" name="role_id" id="role_id" value="1" @if($ldata->id === 1) checked @endif>
                                                        &emsp;
                                                        <label for="role_id">Account Manager </label>&nbsp;
                                                        <input type="radio" name="role_id" id="role_id" value="2" @if($ldata->id === 2) checked @endif>
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
                <div id="delete{{$ldata->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="blue-theme card-title text-center">{{__("Delete User Account")}}</h5>
                            </div>
                            <form action="{{ route('users.accounts.destroy',$ldata->id) }}" method="post" enctype="multipart/form-data">
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

            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: unset;">

                <div class="row gutter-xs">
                    <div class="col-lg-10 col-lg-offset-1">
                        @component('components.messages')@endcomponent
                        <h2 style="color: #000000;font-weight: 900;">Edit News Item <!-- , <span style="font-weight: 100;">Here are your Loans --></h2>
                    </div>
                </div>

                <div class="row" style="margin-top:50px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-6 col-md-6">
                                <button type="button" class="btn btn-success" ><a href="{{route('users.cms.add_news')}}" style="color: #fff;" >Create News item</a></button>
                            </div>
<!--                             <div class="col-lg-6">
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
                            </div> -->
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
                                         <th class="text-left">#</th> 
                                        <th class="text-left">Title</th>
                                        
                                        <th class="text-left">Image</th>
                                        <th class="text-left">Content</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $ldata)
                                    <tr class="white-rows">
                                        <td class="text-left"><b>{{$ldata->id}}</b></td>
                                        <td class="text-left"><b>{{$ldata->title}}</b></td>
                                        <td class="text-left">
                                            @if($ldata->img !== null)<img class="" src='{{asset("storage/app/cms/$ldata->img")}}' width="30" height="30" alt="" />
                                            @else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="30" height="30" /> @endif
                                        </td>
                                        <td class="text-left">{{ substr($ldata->content, 0, 50)}}</td>
                                       
                                        
                                        
                                        
                                        <td class="text-left"><span class="expand-account icon icon-plus" data-toggle="collapse" data-target="#detail{{$ldata->id}}" class="clickable"></span></td>
                                    </tr>
                                    <td style="padding: 0;" colspan="7">
                                        <div id="detail{{$ldata->id}}" class="collapse">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <form action="{{ route('users.cms.news_update') }}" method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="col-lg-10 col-md-10">

                                                                <div class="form-group col-md-4">
                                                                    <label for="image" class="text-dark">Image</label>
                                                                    <!-- <img  class="dropify" id="input-file-now-custom-1" data-default-file="{{asset("storage/app/cms/$ldata->img")}}" width="30" height="30" name="image" alt="" /> -->
                                                                    <input type="file" name="image" id="input-file-now-custom-1" class="dropify"  data-default-file="{{asset("storage/app/cms/$ldata->img")}}" width="30" height="30" name="image" alt="" />
<!--                                                                     @error('image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror -->
                                                                </div>                                                                <div class="form-group col-md-4">
                                                                    <label for="title" class="text-dark">Title</label>

                                                                    <input id="id" type="text" class="form-control @error('title') is-invalid @enderror" name="id" value="{{ $ldata->id }}"  autocomplete="id" style="display: none;">

                                                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $ldata->title }}" required autocomplete="title">

                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="email" class="text-dark">Content</label>
                                                                    <textarea  style="height: 200px;" class="form-control" id="description" placeholder="Another input" name="content">{{ $ldata->content}} </textarea>
                                                                    @error('description')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-2 col-md-2">
                                                                <button type="button" class="btn btn-danger" style="width: 100%; margin: 25px 0 15px 0;" data-toggle="modal" href=""><a href="{{ url('admin/cms/delete_news') }}<?php echo "?id=".$ldata->id ?>" style="color: #fff;" >Delete item</a></button>

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
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-sm-12">
                                        <div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">
                                            <ul class="pagination">
                                               {{$data->links()}} 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script src="{{asset('public/pages/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/elephant.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/application.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.expand-account').on('click', function () {
                $(this).toggleClass("icon-minus");
            })
        });
    </script>

@endsection