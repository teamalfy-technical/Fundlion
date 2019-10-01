<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $url);
$link = end($link_array);
$link = ucwords(str_replace("_", " ", $link));
?>

<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}"></script>

@extends('clients.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <div class="layout-main">
        <div class="layout-content">

            <div id="messages" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="text-center">Message Your Account Manager</h4>
                        </div>
                        <form action="{{ route('clients.messages.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
{{--                                            <h4 class="text-center">Message Your Account Manager</h4>--}}
                                            <label for="subject">Account Manager</label>
                                            <input type="text" class="form-control" value="{{$client->manager['name']}}"
                                                   readonly>
                                            <input type="hidden" name="manager_id" value="{{$client->account_manager}}">
                                            <input type="hidden" name="sent_id" value="1">
                                            <br>
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject" id="subject" class="form-control"
                                                   placeholder="Your message subject here...">
                                            <br>
                                            <label for="messages">Message</label>
                                            <textarea class="form-control" name="message" id="message" cols="30"
                                                      rows="5"
                                                      placeholder="Your message here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">{{__("Send")}}</button>
                                <button type="button" class="btn btn-outline-secondary"
                                        data-dismiss="modal">{{__("Cancel")}}</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            @foreach($messages as $inbox)
                <div id="readmsg{{$inbox->id}}" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="text-center">Read Message</h4>
                            </div>
                            <form action="{{ route('clients.messages.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="subject">From</label>
                                                <input type="text" name="subject" id="subject"
                                                       value="{{$inbox->manager['name']}}"
                                                       class="form-control" readonly>
                                                <br>
                                                <label for="subject">Subject</label>
                                                <input type="text" name="subject" id="subject"
                                                       value="{{$inbox->subject}}" class="form-control"
                                                       readonly>
                                                <br>
                                                <label for="messages">Message</label>
                                                <textarea class="form-control" name="message" id="message" cols="30"
                                                          rows="5"
                                                          readonly>{{$inbox->message}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-outline-secondary"
                                                data-dismiss="modal">{{__("Close")}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <div id="reply{{$inbox->id}}" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="text-center">Reply Your Message</h4>
                            </div>
                            <form action="{{ route('clients.messages.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <input type="text" class="form-control" value="{{$client->manager['name']}}"
                                                       readonly>
                                                <input type="hidden" name="manager_id" value="{{$inbox->manager_id}}">
                                                <input type="hidden" name="message_id" value="{{$inbox->id}}">
                                                <input type="hidden" name="replied" value="1">
                                                <input type="hidden" name="sent_id" value="1">
                                                <br>
                                                <label for="subject">Subject</label>
                                                <input type="text" name="subject" id="subject"
                                                       value="{{$inbox->subject}}" class="form-control">
                                                <br>
                                                <label for="messages">Message</label>
                                                <textarea class="form-control" name="message" id="message" cols="30"
                                                          rows="5">{{$inbox->message}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-success">{{__("Send")}}</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                                data-dismiss="modal">{{__("Cancel")}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <div id="delete{{$inbox->id}}" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-header">
                            <h4 class="text-center text-danger">Delete This Message</h4>
                        </div>
                        <div class="modal-content">
                            <form action="{{ route('clients.messages.destroy',$inbox->id) }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Are you sure you want to delete this message?</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-danger">{{__("Yes")}}</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                                data-dismiss="modal">{{__("Cancel")}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            @endforeach

            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100vh;">
                <div class="row gutter-xs">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Hi {{$session->first_name}}, <span
                                style="font-weight: 100;">Here Are Your Messages</span>
                        </h2>
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        @component('components.messages')@endcomponent
                        <div class="row gutter-xs">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <button class="btn btn-success" style="width: 100%;border-radius: 8px;"
                                                data-toggle="modal"
                                                data-target="#messages">Compose
                                        </button>
                                    </div>
                                    <div class="col-lg-6 message-navigation">
                                        <ul class="nav" style="display: flex;margin-top: 4px;">
                                            <li><a @if($link === "Inbox") style="color: #ff0000"
                                                   @endif href="{{route('clients.messages.inbox')}}">Inbox</a></li>
                                            <li><a @if($link === "Sent") style="color: #ff0000"
                                                   @endif href="{{route('clients.messages.sent')}}">Sent</a></li>
                                            {{--                                            <li><a>Draft</a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="col-sm-5 control-label"
                                           style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search
                                        Messages</label>
                                    <div class="col-sm-7">
                                        <form id="search-form" action="{{route('clients.messages.search')}}"
                                              method="post" role="form">
                                            @csrf
                                            <div class="input-group">
                                                <input name="search_key" style="height: 27px;" class="form-control"
                                                       type="text">
                                                <span class="input-group-btn">
														<label class="btn btn-default file-upload-btn">
																<a href="{{ route('clients.messages.search') }}"
                                                                   onclick="event.preventDefault(); document.getElementById('search-form').submit();"><span
                                                                        class="icon icon-search icon-lg"></span></a>
														</label>
												</span>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row" style="margin-top: 30px;">
                            {{--							<div class="col-lg-12" style="padding: 15px 52px;">--}}
                            {{--								<label class="custom-control custom-control-primary custom-checkbox" style="float: left;">--}}
                            {{--									<input class="custom-control-input" type="checkbox">--}}
                            {{--									<span class="custom-control-indicator"></span>--}}
                            {{--								</label>--}}
                            {{--								<button type="button" class="card-action card-toggler" title="Collapse"></button>--}}
                            {{--								<button type="button" class="card-action card-reload" title="Reload"></button>--}}
                            {{--							</div>--}}
                            <div class="col-lg-12">
                                <div class="card" style="border-color:#000;">
                                    <div class="card-body">
                                        <table class="table table-hover table-no-bordered" style="font-size: 16px;">
                                            <thead>
                                            <tr>
                                                <td>#</td>
                                                <td class="text-center">From</td>
                                                <td class="text-center">Subject</td>
                                                <td class="text-center">Message</td>
                                                <td class="text-center">Date</td>
                                                <td></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($messages !== null)
                                                @foreach($messages as $inbox)
                                                    <tr>
                                                        {{--														<td class="text-center">--}}
                                                        {{--															<label class="custom-control custom-control-primary custom-checkbox">--}}
                                                        {{--																<input class="custom-control-input" type="checkbox">--}}
                                                        {{--																<span class="custom-control-indicator"></span>--}}
                                                        {{--															</label>--}}
                                                        {{--															<span class="star-icon icon icon-star-o"></span>--}}
                                                        {{--														</td>--}}
                                                        <td class="text-left"><i class="fa fa-envelope"></i></td>
                                                        <td class="text-left">{{$inbox->manager['name']}}</td>
                                                        <td class="text-left">{{$inbox->subject}}</td>
                                                        <td class="text-left">
                                                            <a href="#." data-toggle="modal"
                                                               data-target="#readmsg{{$inbox->id}}">
                                                                {{substr($inbox->message, 0, 30)}}...</a></td>
                                                        <?php
                                                        $date = date('d/m', strtotime($inbox->created_at));
                                                        $time = date('g:i', strtotime($inbox->created_at));
                                                        ?>
                                                        <td class="text-right">{{$date}} - {{$time}}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-success"
                                                                    data-toggle="modal"
                                                                    data-target="#readmsg{{$inbox->id}}"
                                                                    title="View Message"><i class="fa fa-search"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-outline-secondary"
                                                                    data-toggle="modal"
                                                                    data-target="#reply{{$inbox->id}}"
                                                                    title="Reply Message"><i class="fa fa-reply"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger"
                                                                    data-toggle="modal"
                                                                    data-target="#delete{{$inbox->id}}"
                                                                    title="Delete Message"><i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5"><h3>You Have No Messages</h3></td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
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
