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

            @foreach($loans as $loan)
                <div id="loan_note{{$loan->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="blue-theme card-title text-center">{{__("Add Notes To Loan Application Form")}}</h5>
                            </div>
                            <form action="{{ route('users.loans.update',$loan->id) }}" method="post" role="form">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="loan_notes">{{__("Loan Application Notes")}}</label>
                                                <textarea class="form-control" name="loan_notes" id="loan_notes" cols="30" rows="5" placeholder="Type your loan application notes here...">{{ $loan->loan_notes }}</textarea>
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
                    </div>
                </div>
            @endforeach

            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;height: 100%;">
                <div class="row gutter-xs">
                    <div class="col-lg-10 col-lg-offset-1">
                        @component('components.messages')@endcomponent
                        <h2 style="color: #000000;font-weight: 900;">Hi {{$admin->first_name." ".$admin->last_name}}, <span style="font-weight: 100;">Here are all client loans</span></h2>
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
                                        {{-- <th class="text-left">#</th> --}}
                                        <th class="text-left">Client</th>
                                        <th class="text-left">Lender</th>
                                        <th class="text-left">Date</th>
                                        <th class="text-left">Amount</th>
                                        <th class="text-left">Duration</th>
                                        <th class="text-left">Purpose</th>
                                        <th class="text-left">Status</th>
                                        <th class="text-left"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 1 ?>
                                    @if($loans !== null)
                                    @foreach($loans as $loan)
                                        <tr class="white-rows">
                                            {{-- <td>{{ $count }}</td> --}}
                                            <td class="text-left"><b>{{$loan->clients->first_name." ".$loan->clients->last_name}}</b></td>
                                            <td class="text-left"><b>{{ $loan->lender->detail['company_name'] }}</b></td>
                                            <?php
                                                $date = date('d/m/y', strtotime($loan->created_at));
                                                $time = date('G:i', strtotime($loan->created_at));
                                            ?>
                                            <td class="text-left">{{$date}}</td>
                                            <td class="text-left">£{{ number_format($loan->loan_amount,2) }}</td>
                                            <td class="text-left">{{$loan->duration['duration']}}</td>
                                            <td class="text-left">{{$loan->purpose['purpose']}}</td>
                                            <td class="text-left">{{$loan->status['status']}}</td>
                                            <td class="text-left">
                                                <div class="btn-group dropdown">
                                                    <span aria-haspopup="true" data-toggle="dropdown" style="padding: 5px;">
                                                        <i class="icon icon-ellipsis-v icon-lg icon-fw"></i>
                                                    </span>
                                                    <ul class="dropdown-menu dropdown-menu-right" style="text-align: center">
                                                        <a href="#." data-toggle="modal" data-target="#loan_note{{$loan->id}}" class="btn btn-success btn-sm">Notes</a>
                                                        <a href="{{route('users.loans.generate',$loan->id)}}" target="_blank" class="btn btn-success btn-sm">Download</a>
                                                    </ul>
                                                </div>                                               
                                            </td>
                                        </tr>
                                        <?php $count++ ?>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-sm-12">
                                        <div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">
                                            <ul class="pagination">
                                                {{$loans->links()}}
                                            </ul>
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