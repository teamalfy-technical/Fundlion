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
            <div id="avatar{{ $admin->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="blue-theme card-title text-center">{{__("Update Account Avatar")}}</h5>
                        </div>
                        <form action="{{ route('users.avatar.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now-custom-1">{{__("Click on image to upload new image...")}}</label>
                                            <input type="file" name="avatar" id="input-file-now-custom-1" class="dropify" data-default-file="{{asset("storage/app/users/avatar/$admin->avatar")}}" />
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

            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100%;">
                <div class="row gutter-xs">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Hi {{ $admin->name }}, <span style="font-weight: 100;">Here is your Account</span></h2>
                    </div>
                </div>

                <!-- Details -->
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-12">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">
                                    <div class="card-body no-border">
                                        @component('components.messages')@endcomponent
                                        
                                        <div class="row grid-divider">
                                            <form action="{{route('users.account.update')}}" method="post" role="form">
                                                @csrf

                                                <div class="col-lg-7 col-md-7" style="padding: 0 30px;">
                                                    <h3 style="color: #000000; font-weight: 900;">Your Personal Details</h3>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Name:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{ $admin->name}}</p></div>
                                                        <div class="col-lg-7"><input type="text" class="form-control" name="name" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{ $admin->name}}" required autofocus /></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Account Type:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{ $admin->userRole['role']}}</p></div>
                                                        <div class="col-lg-7">
                                                            <select style="color:#000;font-size:14px;font-weight:normal;display: none" name="role_id" class="form-control" required>
                                                                <option value="{{$admin->userRole['id']}}" selected readonly hidden>{{$admin->userRole['role']}}</option>
                                                                @foreach($userRoles as $userRole)
                                                                    <option value="{{$userRole->id}}">{{$userRole->role}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Email Address:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{ $admin->email }}</p></div>
                                                        <div class="col-lg-7"><input type="text" class="form-control" name="email" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{ $admin->email}}" required /></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Phone Number:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{ $admin->phone }}</p></div>
                                                        <div class="col-lg-7"><input type="text" class="form-control" name="phone" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{ $admin->phone}}" /></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5 col-md-5">
                                                    <h3 style="color: #000000; font-weight: 900;"></h3>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-5">
                                                            <div>
                                                                <a style="cursor: pointer" data-toggle="modal" data-target="#avatar{{ $session->id }}" title="click to change upload new image">
                                                                    @if($admin->avatar !== null)<img class="circle" src="{{asset("storage/app/users/$admin->id/avatar/$admin->avatar")}}" width="120" height="120" alt="" />
                                                                    @else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="140" height="140" /> @endif
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-7">
                                                            <h2 style="color: #000; font-weight: 900; font-size: 24px">{{ $admin->name}}</h2>
                                                            {{--<input type="text" class="form-control" name="first_name" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->first_name}}" required />--}}
                                                            {{-- <input type="text" class="form-control" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{ $admin->name}}" required /> --}}
                                                            <div class="clearfix"></div>
                                                            <div class="media">
                                                                <div class="media-middle media-left">
                                                                    <img width="20" height="20" src="{{ asset('public/pages/assets/img/core-img/phone-call.png') }}" alt="Harry Jones">
                                                                </div>
                                                                <div class="media-middle media-body" style="color: #000;">
                                                                    <h5 class="m-y-0">{{ $admin->phone }}</h5>
                                                                    {{-- <input type="text" class="form-control" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{ $admin->phone}}" /> --}}
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-middle media-left">
                                                                    <img width="20" height="20" src="{{  asset('public/pages/assets/img/core-img/mail.png') }}" alt="Harry Jones">
                                                                </div>
                                                                <div class="media-middle media-body" style="color: #000;">
                                                                    <h5 class="m-y-0">{{ $admin->email }}</h5>
                                                                    {{-- <input type="text" class="form-control" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{ $admin->email}}" /> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <div class="col-lg-10 col-md-10 ">
                                                        <button id="showEdit" style="display: block" type="button" class="btn btn-success pull-right">Edit Details</button>
                                                        <button id="showCancel" style="display: none" type="button" class="btn btn-outline-secondary pull-right">Cancel</button>
                                                        <button id="showSave" style="display: none" type="submit" class="btn btn-success pull-right">Save</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Documents -->
                <div class="row" style="margin-top: 60px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-12">
                                <div class="card"
                                     style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">
                                    <div class="card-body no-border">
                                        <div class="row">

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

    <script type="text/javascript">
        $(function () {
            $("#showEdit").click(function () {

                document.getElementById("showEdit").style.display = "none";
                document.getElementById("showSave").style.display = "block";
                document.getElementById("showCancel").style.display = "block";

                $('form p').slideUp(400);
                // $('form h2').slideUp(400);
                // $('form h5').slideUp(400);
                $('form input').slideDown(400);
                $('form select').slideDown(400);
            });

            $("#showCancel").click(function () {

                document.getElementById("showEdit").style.display = "block";
                document.getElementById("showSave").style.display = "none";
                document.getElementById("showCancel").style.display = "none";

                $('form p').slideDown(400);
                // $('form h2').slideDown(400);
                // $('form h5').slideDown(400);
                $('form input').slideUp(400);
                $('form select').slideUp(400);
            });
        });
    </script>

@endsection