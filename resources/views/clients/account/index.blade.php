<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}" ></script>
<script src="{{ asset('public/pages/assets/js/jquery.min.js') }}"></script>

@extends('clients.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <div class="layout-main">

        <div class="layout-content">
            <div id="avatar{{$client->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="blue-theme card-title text-center">{{__("Update Account Avatar")}}</h5>
                        </div>
                        <form action="{{ route('clients.avatar.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now-custom-1">{{__("Click on image to upload new image...")}}</label>
                                            <input type="file" name="avatar" id="input-file-now-custom-1" class="dropify" data-default-file="{{asset("storage/app/clients/avatar/$client->avatar")}}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">{{__("Save")}}</button>
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Cancel")}}</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div id="doc_upload" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="blue-theme card-title text-center">{{__("Upload Document")}}</h5>
                        </div>

                        <form action="{{ route('clients.documents.upload') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-4 col-md-4 pull-left">
                                    <label for="type_id" class="text-dark"> Select document type...</label>
                                    <select name="type_id" id="type_id" class="form-control" required>
                                        <option value="" hidden>Select type...</option>
                                        @foreach($allTypes as $allType)
                                            <option value="{{$allType->id}}">{{$allType->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-8 col-md-8 pull-right">
                                    <label for="type_custom" class="text-dark"> If other, please specify...</label>
                                    <input name="type_custom" class="form-control" placeholder="What document are you uploading?">
                                    <br>
                                </div>
                                <br><br>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <br>
                                            <img width="20" height="20" src="{{asset('public/pages/assets/img/core-img/upload-icon.png')}}" style="margin:10px;">
                                            <span>Click on browse to choose document
                                                <input type="file" name="file" id="file" required/>
                                            </span>
{{--                                            <label for="input-file-now-custom-1">{{__("Click on image to upload new image...")}}</label>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">{{__("Submit")}}</button>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Cancel")}}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <script type="text/javascript">
                $(function () {
                    $("#type_id").on('change', function () {
                        console.log($(this).val());
                        if ($(this).val() === "6") {
                            // console.log("Working");
                            // document.getElementById("type_change").style.display = "block";
                            // document.getElementById("showSave").style.display = "block";
                            $("#type_change").show(300);
                        }
                        else {
                            $("#type_change").hide(300);
                        }
                    });
                });
            </script>

            @foreach($clientFiles as $clientFile)
                <div id="doc_remove{{$clientFile->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="blue-theme card-title text-center">{{__("Remove Document")}}</h5>
                            </div>

                            <form action="{{ route('clients.documents.remove') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                            <span class="text-center">Are you sure you want to remove this document?
                                                <input type="hidden" name="file_id" value="{{$clientFile->id}}" />
                                            </span>
                                                {{--                                            <label for="input-file-now-custom-1">{{__("Click on image to upload new image...")}}</label>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-danger">{{__("Yes")}}</button>
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("No")}}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            @endforeach
            <div id="messages" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="text-center">Message Your Account Manager</h4>
                        </div>
                        <form action="{{ route('clients.messages.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="subject">Account Manager</label>
                                            <input type="text" class="form-control" value="{{$client->manager['name']}}" readonly>
                                            <input type="hidden" name="recipient" value="{{$client->account_manager}}">
                                            <br>
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Your message subject here...">
                                            <br>
                                            <label for="messages">Message</label>
                                            <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Your message here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="hidden" name="recipient" id="recipient" value="{{$session->account_manager}}">
                                <button type="submit" class="btn btn-success">{{__("Send")}}</button>
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
                        <h2 style="color: #000000;font-weight: 900;">Hi {{$client->first_name." ".$client->last_name}}, <span style="font-weight: 100;">Here is your Account</span></h2>
                    </div>
                </div>

                <!-- Details -->
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                        <div class="row gutter-xs">
                            <div class="col-lg-12">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">
                                    <div class="card-body no-border">
                                        @component('components.messages')@endcomponent
                                        <div class="row grid-divider">
                                            <form action="{{route('clients.account.update')}}" method="post" role="form">
                                                @csrf

                                                <div class="col-lg-7 col-md-7" style="padding: 0 30px;">
                                                    <h3 style="color: #000000; font-weight: 900;">Your Company Details</h3>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Company Name:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->company['company']}}</p></div>
                                                        <div class="col-lg-7"><input type="text" class="form-control" name="company" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->company['company']}}" required autofocus /></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Industry Sector:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->company->industry['industry']}}</p></div>
                                                        <div class="col-lg-7">
                                                            <select style="color:#000;font-size:14px;font-weight:normal;display: none" name="industry_id" class="form-control" required>
                                                                <option value="{{$client->company['industry_id']}}" selected readonly hidden>{{$client->company->industry['industry']}}</option>
                                                                @foreach($all_industries as $industry)
                                                                    <option value="{{$industry->id}}">{{$industry->industry}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Trading As:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->company->trading_as['structure']}}</p></div>
                                                        <div class="col-lg-7">
                                                            <select style="color:#000;font-size:14px;font-weight:normal;display: none" name="business_structure_id" class="form-control" required>
                                                                <option value="{{$client->company['business_structure_id']}}" selected readonly hidden>{{$client->company->trading_as['structure']}}</option>
                                                                @foreach($all_trading_as as $structure)
                                                                    <option value="{{$structure->id}}">{{$structure->structure}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Trading For:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->company->trading_for['trade_for']}}</p></div>
                                                        <div class="col-lg-7">
                                                            <select style="color:#000;font-size:14px;font-weight:normal;display: none" name="trading_for_id" class="form-control" required>
                                                                <option value="{{$client->company['trading_for_id']}}" selected readonly hidden>{{$client->company->trading_for['trade_for']}}</option>
                                                                @foreach($all_trading_for as $trade_for)
                                                                    <option value="{{$trade_for->id}}">{{$trade_for->trade_for}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Business Revenue:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->company->revenue['revenue']}}</p></div>
                                                        <div class="col-lg-7">
                                                            <select style="color:#000;font-size:14px;font-weight:normal;display: none" name="revenue_id" class="form-control" required>
                                                                <option value="{{$client->company['revenue_id']}}" selected readonly hidden>{{$client->company->revenue['revenue']}}</option>
                                                                @foreach($all_revenues as $revenue)
                                                                    <option value="{{$revenue->id}}">{{$revenue->revenue}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Business Address:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->company['address_one']}}</p></div>
                                                        <div class="col-lg-7"><input type="text" class="form-control" name="address_one" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->company['address_one']}}" required /></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Business Telephone:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->company['business_phone']}}</p></div>
                                                        <div class="col-lg-7"><input type="text" class="form-control" name="business_phone" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->company['business_phone']}}" required /></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5"><h6 style="font-weight: 900;color: #000000;font-size: 16px;">Business Email:</h6></div>
                                                        <div class="col-lg-7"><p style="font-size: 16px;color: #343439;font-weight: 100;margin: 3px;">{{$client->email}}</p></div>
                                                        <div class="col-lg-7"><input type="text" class="form-control" name="email" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->email}}" required /></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5">
                                                    <h3 style="color: #000000; font-weight: 900;">Your Personal Details</h3>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-5">
                                                            <div>
                                                                <a style="cursor: pointer" data-toggle="modal" data-target="#avatar{{$client->id}}" title="click to change upload new image">
                                                                    @if($client->avatar !== null)<img class="circle" src="{{asset("storage/app/clients/$session->id/avatar/$client->avatar")}}" width="120" height="120" alt="" />
                                                                    @else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="140" height="140" /> @endif
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-7">
                                                            <h2 style="color: #000; font-weight: 900; font-size: 24px">{{$client->first_name." ".$client->last_name}}</h2>
                                                            {{--<input type="text" class="form-control" name="first_name" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->first_name}}" required />--}}
                                                            <input type="text" class="form-control" name="name" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->first_name}} {{$client->last_name}}" required />
                                                            <div class="clearfix"></div>
                                                            <div class="media">
                                                                <div class="media-middle media-left">
                                                                    <img width="20" height="20" src="{{asset('public/pages/assets/img/core-img/phone-call.png')}}" alt="Harry Jones">
                                                                </div>
                                                                <div class="media-middle media-body" style="color: #000;">
                                                                    <h5 class="m-y-0">(+44) {{$client->phone}}</h5>
                                                                    <input type="text" class="form-control" name="phone" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->phone}}" />
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-middle media-left">
                                                                    <img width="20" height="20" src="{{asset('public/pages/assets/img/core-img/mail.png')}}" alt="Harry Jones">
                                                                </div>
                                                                <div class="media-middle media-body" style="color: #000;">
                                                                    <h5 class="m-y-0">{{$client->email}}</h5>
                                                                    <input type="text" class="form-control" name="email" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->email}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-lg-7 col-md-7">
                                                            <div class="media">
                                                                <div class="media-middle media-left">
                                                                    <a href="#">
                                                                        <img class="img-circle" width="40" height="40" src="{{asset('public/pages/assets/img/core-img/location.png')}}" alt="Harry Jones">
                                                                    </a>
                                                                </div>
                                                                <div class="media-middle media-body" style="color: #000;">
                                                                    <h5 class="m-y-0" style="font-size: 16px;">{{$client->company['address_one']}}</h5>
                                                                    <input type="text" class="form-control" name="address_one" style="color:#000;font-size:14px;font-weight:normal;display:none;" value="{{$client->company['address_one']}}" />
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
                <div class="row" style="margin-top: 60px;" id="doc-upload">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-12">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">
                                    <div class="card-body no-border">
                                        <div class="row grid-divider">
                                            <div class="col-lg-12" style="padding: 0 30px;">
                                                <h3 class="text-center" style="color: #000000; font-weight: 900;">Documents</h3>
                                                <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#doc_upload" title="Click to upload document">Upload Document</button>
                                                <div class="clearfix"></div>
                                                <div class="row" style="margin-top: 30px;overflow-x: auto;white-space: nowrap;">

                                                    @if($clientFilesFirst === null)
                                                        <div class="col-lg-12 col-md-12">
                                                            <h3 class="text-center" style="color: #696969;margin: 20px 0;font-weight: 900;">No documents uploaded</h3>
                                                        </div>
                                                    @else

                                                    @foreach($clientFiles as $clientFile)
                                                        <div class="banks col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                                            <a href="{{asset("storage/app/clients/$clientFile->client_id/documents/$clientFile->file")}}" class="text-center" target="_blank">
                                                                <img class="card-img img-responsive text-center" style="margin: 20px auto;width: 55px;" src="{{asset('public/pages/assets/img/core-img/doc-file.png')}}" alt="Lloyds">
{{--                                                                <p class="text-center" style="color: #000000;word-wrap: break-word;flex-wrap: wrap"> @if($clientFile->type_id < 6) {{$clientFile->type['type']}} @else {{$clientFile->type_custom}} @endif </p>--}}
                                                                <p class="text-center" style="color: #000000;word-wrap: break-word;flex-wrap: wrap"> @if($clientFile->type['id'] < 5) {{$clientFile->type['type']}} @else {{$clientFile->type_custom}} @endif </p>
                                                            </a>
                                                            <span class="col-md-12 text-center">
                                                                <a href="{{asset("storage/app/clients/$clientFile->client_id/documents/$clientFile->file")}}" target="_blank">View</a> |
                                                                <a href="#." class="text-danger" data-toggle="modal" data-target="#doc_remove{{$clientFile->id}}" title="Click to remove document"> Remove</a>
                                                            </span>
                                                        </div>
                                                    @endforeach

                                                    @endif
                                                </div>
                                            </div>
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
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);">
                                    <div class="card-body no-border">

                                        <div class="row" style="margin-top: 25px;">
                                            <div class="col-lg-10 col-lg-offset-1">

                                                <div class="row grid-divider">
                                                    <div class="col-lg-6 col-md-6" style="padding: 0 45px;">
                                                        <div class="card" style="border-radius: 20px;">
                                                            <div class="card-body text-center">
{{--                                                                <h3 class="text-center" style="font-weight: 800; color: #000;">Account Manager</h3>--}}
                                                                @if($session->account_manager === null) <h4>Not Assigned</h4> @endif
                                                                <div class="card" style="border-radius: 10px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.23); width: 200px;margin: 0 auto;">
                                                                    <div class="card-header no-border">
                                                                        <div class="media text-center">
                                                                            <div class="media-middle media-center">
                                                                                <?php $avatar = $client->manager['avatar'];?>
                                                                                @if($client->manager['avatar'] !== null)<img class="img-circle" src="{{asset("storage/app/users/$client->account_manager/avatar/$avatar")}}" width="120" height="120" alt="" />
                                                                                @else <img alt="" class="circle" src="{{asset("public/pages/assets/img/default/user-img.png")}}" width="120" height="120" /> @endif
                                                                            </div>
                                                                            <div class="media-middle media-body">
                                                                                <h4 class="text-dark" style="margin-top: 8px;font-weight: 800; color: #3d3c4c;margin-bottom: 0;">{{$client->manager['name']}}
                                                                                    <br><span style="font-size: 13px">Account Manager</span></h4>
                                                                                <p style="font-size: 20px;font-weight: 100;color: #d63d01;">{{$client->manager['phone']}}</p>
                                                                                <p>{{$client->manager['email']}}</p>
                                                                                <button class="btn btn-success" @if($session->account_manager === null) disabled @endif data-toggle="modal" data-target="#messages">Send Message</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6" style="padding: 0 45px;">
                                                        <div class="card" style="background-color: #d63d01;border-radius: 20px;">
                                                            <div class="card-body">
                                                                <img src="{{asset('public/pages/assets/img/core-img/card_logo.png')}}" alt="Fundlion" style="width: 100%;">
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
                $('form h2').slideUp(400);
                $('form h5').slideUp(400);
                $('form input').slideDown(400);
                $('form select').slideDown(400);
            });

            $("#showCancel").click(function () {

                document.getElementById("showEdit").style.display = "block";
                document.getElementById("showSave").style.display = "none";
                document.getElementById("showCancel").style.display = "none";

                $('form p').slideDown(400);
                $('form h2').slideDown(400);
                $('form h5').slideDown(400);
                $('form input').slideUp(400);
                $('form select').slideUp(400);
            });
        });
    </script>

@endsection
