<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $url);
$link = end($link_array);
$link = ucwords(str_replace("_", " ", $link));
?>

<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}"></script>

@extends('users.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <div class="layout-main">
        <div class="layout-content">

            <!-- Compose Message -->
            <div id="compose" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="blue-theme card-title text-center">{{__("Send Message")}}</h5>
                        </div>
                        <form action="{{ route('users.messages.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="text-center">Message Your Client</h4>
                                            <select name="client_id" class="form-control" required>
                                                <option hidden>Select Client...</option>
                                                @foreach($clients as $client)
                                                    <option
                                                        value="{{$client->id}}">{{$client->first_name." ".$client->last_name}}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject" id="subject" class="form-control"
                                                   placeholder="Your message subject here...">
                                            <input type="hidden" name="sent_id" value="2">
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
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">Send</button>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>



            <!-- Read Message -->
            @if($admin->role_id === 2)
                @foreach($messages as $inbox)
                    @if($inbox->manager_id === $admin->id)

                        <div id="readmsg{{$inbox->id}}" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="blue-theme card-title text-center">{{__("Message")}}</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label for="subject">From</label>
                                                    <input type="text"
                                                           value="{{$inbox->client['first_name']." ".$inbox->client['last_name']}}"
                                                           class="form-control" readonly>
                                                    <br>
                                                    <label for="subject">Subject</label>
                                                    <input type="text" value="{{$inbox->subject}}" class="form-control"
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
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                        <div id="reply{{$inbox->id}}" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('users.messages.reply',$inbox->id) }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="text-center">Reply Your Client</h4>
                                                        <input type="text" class="form-control"
                                                               value="{{$inbox->client['first_name']." ".$inbox->client['last_name']}}"
                                                               readonly>
                                                        <br>
                                                        <label for="subject">Subject</label>
                                                        <input type="text" name="subject" id="subject"
                                                               value="@if($inbox->replied === 0) Re: @endif {{$inbox->subject}}"
                                                               class="form-control">
                                                        <br>
                                                        <label for="messages">Message</label>
                                                        <textarea class="form-control" name="message" id="message"
                                                                  cols="30"
                                                                  rows="5">{{$inbox->message}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="col-lg-12">
                                                <input type="hidden" name="message_id" value="{{$inbox->id}}">
                                                <input type="hidden" name="client_id" id="client_id"
                                                       value="{{$inbox->client_id}}">
                                                <input type="hidden" name="sent_id" value="2"
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

                    @endif
                @endforeach

                <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;">
                    <div class="row gutter-xs">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h2 style="color: #000000;font-weight: 900;">Hi {{$session->first_name}}, <span
                                    style="font-weight: 100;">Here Are Your Inbox Messages</span>
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
                                                    data-target="#compose">Compose
                                            </button>
                                        </div>
                                        <div class="col-lg-6 message-navigation">
                                            <ul class="nav" style="display:-webkit-box; margin-top: 4px;">
                                                <li><a @if($link === "Inbox") style="color: #ff0000"
                                                       @endif href="{{route('users.messages.inbox')}}">Inbox</a></li>
                                                <li><a @if($link === "Sent") style="color: #ff0000"
                                                       @endif href="{{route('users.messages.sent')}}">Sent</a></li>
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
                                            <form id="search-form" action="{{route('users.messages.search')}}"
                                                  method="post" role="form">
                                                @csrf
                                                <div class="input-group">
                                                    <input name="search_key" style="height: 27px;" class="form-control"
                                                           type="text">
                                                    <span class="input-group-btn">
														<label class="btn btn-default file-upload-btn">
                                                            <a href="{{ route('users.messages.search') }}"
                                                               onclick="event.preventDefault(); document.getElementById('search-form').submit();">
                                                                <span class="icon icon-search icon-lg"></span></a>
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
                    <div class="row" style="margin-top:50px;">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="row" style="margin-top: 30px;">
                                {{--								<div class="col-lg-12" style="padding: 15px 52px;">--}}
                                {{--									<label class="custom-control custom-control-primary custom-checkbox" style="float: left;">--}}
                                {{--										<input class="custom-control-input" type="checkbox">--}}
                                {{--										<span class="custom-control-indicator"></span>--}}
                                {{--									</label>--}}
                                {{--									<button type="button" class="card-action card-toggler" title="Collapse"></button>--}}
                                {{--									<button type="button" class="card-action card-reload" title="Reload"></button>--}}
                                {{--								</div>--}}
                                <div class="col-lg-12">
                                    <div class="card" style="border-color:#000;">
                                        <div class="card-body">
                                            <table class="table table-hover table-no-bordered" style="font-size: 16px;">
                                                <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <td>From</td>
                                                    <td>Subject</td>
                                                    <td>Message</td>
                                                    <td>Date</td>
                                                    <td>Control</td>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @if($messages !== null)
                                                    @foreach($messages as $inbox)
                                                        @if($inbox->manager_id === $admin->id)
                                                            <tr>
                                                                {{--																<td class="text-center">--}}
                                                                {{--																	<label class="custom-control custom-control-primary custom-checkbox">--}}
                                                                {{--																		<input class="custom-control-input" type="checkbox">--}}
                                                                {{--																		<span class="custom-control-indicator"></span>--}}
                                                                {{--																	</label>--}}
                                                                {{--																	<span class="star-icon icon icon-star-o"></span>--}}
                                                                {{--																</td>--}}
                                                                <td><i class="fa fa-envelope"></i></td>
                                                                <td
                                                                    class="text-left">{{$inbox->client['first_name']." ".$inbox->client['last_name']}}</td>
                                                                <td class="text-left">{{$inbox->subject}}</td>
                                                                <td class="text-left">
                                                                    <a href="#." data-toggle="modal"
                                                                       data-target="#readmsg{{$inbox->id}}">{{substr($inbox->message, 0, 50)}}
                                                                        ...</a>
                                                                </td>
                                                                <?php
                                                                $date = date('d/m', strtotime($inbox->created_at));
                                                                $time = date('g:i', strtotime($inbox->created_at));
                                                                ?>
                                                                <td class="text-right">{{$date}} - {{$time}}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-success"
                                                                            data-toggle="modal"
                                                                            data-target="#readmsg{{$inbox->id}}"
                                                                            title="view message"><i
                                                                            class="fa fa-search"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-outline-secondary"
                                                                            data-toggle="modal"
                                                                            data-target="#reply{{$inbox->id}}"
                                                                            title="reply message"><i
                                                                            class="fa fa-reply"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger"
                                                                            data-toggle="modal"
                                                                            data-target="#delete{{$inbox->id}}"
                                                                            title="Delete Message"><i
                                                                            class="fa fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
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
            @endif


        <!-- Reply Message -->
            @if($admin->role_id === 1)
                @foreach($messages as $inbox)
                    <div id="readmsg{{$inbox->id}}" class="modal fade" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="blue-theme card-title text-center">{{__("Message")}}</h5>
                                </div>
                                <form action="{{ route('clients.messages.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label for="subject">From</label>
                                                    <input type="text"
                                                           value="{{$inbox->client['first_name']." ".$inbox->client['last_name']}}"
                                                           class="form-control" readonly>
                                                    <br>
                                                    <label for="subject">Subject</label>
                                                    <input type="text" name="subject" id="subject"
                                                           value="{{$inbox->subject}}"
                                                           class="form-control" readonly>
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
                    {{--                    <div id="reply{{$inbox->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
                    {{--                        <div class="modal-dialog">--}}
                    {{--                            <div class="modal-content">--}}
                    {{--                                <form action="{{ route('clients.messages.store') }}" method="post" enctype="multipart/form-data">--}}
                    {{--                                    @csrf--}}
                    {{--                                    <div class="modal-body">--}}
                    {{--                                        <div class="col-lg-12">--}}
                    {{--                                            <div class="card">--}}
                    {{--                                                <div class="card-body">--}}
                    {{--                                                    <h4 class="text-center">Reply Your Client</h4>--}}
                    {{--                                                    <br>--}}
                    {{--                                                    <label for="subject">Subject</label>--}}
                    {{--                                                    <input type="text" name="subject" id="subject" value="Re: {{$inbox->subject}}" class="form-control" >--}}
                    {{--                                                    <br>--}}
                    {{--                                                    <label for="messages">Message</label>--}}
                    {{--                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10">{{$inbox->message}}</textarea>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}

                    {{--                                    <div class="modal-footer">--}}
                    {{--                                        <div class="col-lg-12">--}}
                    {{--                                            <input type="hidden" name="recipient" id="recipient" value="{{$inbox->create_id}}">--}}
                    {{--                                            <button type="submit" class="btn btn-success">{{__("Send")}}</button>--}}
                    {{--                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__("Cancel")}}</button>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </form>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- /.modal-content -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- /.modal-dialog -->--}}
                    {{--                    </div>--}}
                @endforeach

                <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100vh;">
                    <div class="row gutter-xs">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h2 style="color: #000000;font-weight: 900;">Hi {{$session->first_name}}, <span
                                    style="font-weight: 100;">Here Are All Inbox Messages</span>
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
                                                    data-target="#compose">Compose
                                            </button>
                                        </div>
                                        <div class="col-lg-6 message-navigation">
                                            <ul class="nav" style="display: flex;margin-top: 4px;">
                                                <li><a @if($link === "Inbox") style="color: #ff0000"
                                                       @endif href="{{route('users.messages.inbox')}}">Inbox</a></li>
                                                <li><a @if($link === "Sent") style="color: #ff0000"
                                                       @endif href="{{route('users.messages.sent')}}">Sent</a></li>
                                                {{--                                                <li><a>Draft</a></li>--}}
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
                                            <form id="search-form" action="{{route('users.messages.search')}}"
                                                  method="post" role="form">
                                                @csrf
                                                <div class="input-group">
                                                    <input name="search_key" style="height: 27px;" class="form-control"
                                                           type="text">
                                                    <span class="input-group-btn">
														<label class="btn btn-default file-upload-btn">
																<a href="{{ route('users.messages.search') }}"
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
                    <div class="row" style="margin-top:50px;">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-lg-12" style="padding: 15px 52px;">
                                    <label class="custom-control custom-control-primary custom-checkbox"
                                           style="float: left;">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                                    <button type="button" class="card-action card-reload" title="Reload"></button>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card" style="border-color:#000;">
                                        <div class="card-body">
                                            <table class="table table-hover table-no-bordered" style="font-size: 16px;">
                                                <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <td>From</td>
                                                    <td>Subject</td>
                                                    <td>Message</td>
                                                    <td>Date</td>
                                                    <td>Control</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($messages !== null)
                                                    @foreach($messages as $inbox)
                                                        <tr>
                                                            {{--                                                            <td class="text-center">--}}
                                                            {{--                                                                <label--}}
                                                            {{--                                                                    class="custom-control custom-control-primary custom-checkbox">--}}
                                                            {{--                                                                    <input class="custom-control-input" type="checkbox">--}}
                                                            {{--                                                                    <span class="custom-control-indicator"></span>--}}
                                                            {{--                                                                </label>--}}
                                                            {{--                                                                <span class="star-icon icon icon-star-o"></span>--}}
                                                            {{--                                                            </td>--}}
                                                            <td><i class="fa fa-envelope"></i></td>
                                                            <td
                                                                class="text-left">{{$inbox->client['first_name']." ".$inbox->client['last_name']}}</td>
                                                            <td class="text-left">{{$inbox->subject}}</td>
                                                            <td class="text-left">
                                                                <a href="#." data-toggle="modal"
                                                                   data-target="#readmsg{{$inbox->id}}">{{substr($inbox->message, 0, 50)}}
                                                                    ...</a>
                                                            </td>
                                                            <?php
                                                            $date = date('d/m', strtotime($inbox->created_at));
                                                            $time = date('g:i', strtotime($inbox->created_at));
                                                            ?>
                                                            <td class="text-right">{{$date}} - {{$time}}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-success"
                                                                        data-toggle="modal"
                                                                        data-target="#readmsg{{$inbox->id}}"
                                                                        title="view message"><i
                                                                        class="fa fa-search"></i>
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-outline-secondary"
                                                                        data-toggle="modal"
                                                                        data-target="#reply{{$inbox->id}}"
                                                                        title="reply message" disabled><i
                                                                        class="fa fa-reply"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger"
                                                                        data-toggle="modal"
                                                                        data-target="#delete{{$inbox->id}}"
                                                                        title="Delete Message"
                                                                        disabled><i
                                                                        class="fa fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="5"><h3>There Are No Inbox Messages</h3></td>
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
            @endif

        </div>
    </div>

@endsection
