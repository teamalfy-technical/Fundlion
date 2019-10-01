<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

<script src="{{asset("public/pages/assets/js/jquery/jquery-3.2.1.min.js")}}" ></script>

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
                        <h2 style="color: #000000;font-weight: 900;">Hi {{$session->first_name." ".$session->last_name}}, <span style="font-weight: 100;">Here are your Loans</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                        <div class="row gutter-xs">
                            <div class="col-lg-12">
                                <table class="table table-hover table-borderless" style="background-color: #e0e0e0;">
                                    <thead>
                                        <tr>
                                            <th class="text-left">#</th>
                                            <th class="text-left">Lender</th>
                                            <th class="text-left">Loan Date</th>
                                            <th class="text-left">Amount [£]</th>
                                            <th class="text-left">Duration</th>
                                            <th class="text-left">Purpose</th>
                                            <th class="text-left">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 1?>
                                    @foreach($loans as $loan)
                                        @if($loan->loan_status_id !== 0)
                                        <tr class="white-rows">

                                            <td class="text-left"><b>{{$count}}</b></td>
                                            <td class="text-left"><a href="{{route('clients.lenders.profile',$loan->lender->id)}}"><b>{{$loan->lender->detail['company_name']}}</b></a></td>
                                            <?php
                                            $date = date('d/m/y', strtotime($loan->created_at));
                                            $time = date('G:i', strtotime($loan->created_at));
                                            ?>
                                            <td class="text-left">{{$date}} - {{$time}}</td>
                                            <td class="text-left">{{number_format($loan->loan_amount, 2)}}</td>
                                            <td class="text-left">{{$loan->duration['duration']}}</td>
                                            <td class="text-left">{{$loan->purpose['purpose']}}</td>
                                            <td class="text-left">{{$loan->status['status']}}</td>
                                        </tr>
                                        @endif
                                        <?php $count = $count+1?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-12">
                        <div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">
                            <ul class="pagination">
                                {{$loans->links()}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 60px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                        <div class="row grid-divider">
                            <div class="col-lg-6 col-md-6" style="padding: 0 45px;">
                                <div class="card" style="border-radius: 20px;">
                                    <div class="card-body text-center">
                                        <h3 class="text-center" style="font-weight: 800; color: #000;">Account Manager</h3>
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
                                                        <h3 class="text-dark" style="margin-top: 8px;font-weight: 800; color: #3d3c4c;margin-bottom: 0;">{{$client->manager['name']}}</h3>
                                                        <p style="font-size: 20px;font-weight: 100;color: #d63d01;">{{$client->manager['phone']}}</p>
                                                        <p style="margin-bottom: 30px;">{{$client->manager['email']}}</p>
                                                        <p><button class="btn btn-success" @if($session->account_manager === null) disabled @endif data-toggle="modal" data-target="#messages">Send Message</button></p>
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

@endsection
