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
            <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;"> {{--height: 100%;--}}
                <div class="row gutter-xs">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Hi {{$client->first_name}}, <span style="font-weight: 100;">Here are your notifications</span></h2>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs" style="margin: 30px 0;">
                            <div class="col-lg-7 col-lg-offset-5">
                                <div class="form-group">
                                    <label class="col-sm-5 control-label" style="text-align: right;font-size: 20px;font-weight: 100;color: #000;">Search Lenders</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <label class="btn btn-default file-upload-btn">
                                                    <span class="icon icon-search icon-lg"></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- new -->
                <div class="row">
                    <div class="row gutter-xs">
                        <div class="col-lg-10 col-lg-offset-1">

                            @component('components.messages')@endcomponent

                            <div class="table-responsive">
                                <table class="table" style="background-color: #e0e0e0;">

                                    <thead class="text-center">
                                    <tr>
                                        <th>Lender</th>
                                        <th>Description</th>
                                        <th>Interest rate</th>
                                        <th>Approval Time</th>
                                        <th>Fees</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @if($lenders !== null)
                                            @foreach($lenders as $lender)
                                                <tr class="white-rows">
                                                    <td class="text-left">
                                                        <?php $img = $lender->detail['logo']; ?>
                                                        @if($lender->detail['logo'] !== null)<img class="lender_image center-block img-responsive" style="width:50%;" src="{{asset("storage/app/lenders/$lender->id/logo/$img")}}">
                                                        @else<img width="30" src="{{asset("public/pages/assets/img/default/no-image.jpg")}}">@endif
                                                    </td>
                                                    <td class="">
                                                        <a href="{{route('clients.lenders.profile',$lender->id)}}"><h4>{{$lender->detail['company_name']}}</h4></a>
                                                        <p class="">{{ substr( ($lender->detail['description']), 0, 80) }}...</p><p><a href="{{route('clients.lenders.profile',$lender->id)}}">read more</a></p>
                                                    </td>
                                                    <td class="vertical-align-middle orange text-center">{{$lender->detail['interest_rate']}}%</td>
                                                    <td class="vertical-align-middle text-center">{{ $lender->detail['process_time']}}</td>
                                                    <td class="vertical-align-middle text-center">{{$lender->detail['additional_fees']}}</td>
                                                    <td class="vertical-align-middle text-center">
                                                        <form action="{{ route('clients.loans.apply') }}" method="post" role="form">
                                                            @csrf
                                                            <input type="hidden" name="lender_id" value="{{ $lender->id }}">
                                                            <input type="hidden" name="loan_rate" value="{{ $lender->detail['interest_rate'] }}">
                                                            @if($funding !== null)
                                                                <input type="hidden" name="loan_amount" value="{{ $funding->loan_amount }}">
                                                                <input type="hidden" name="loan_purpose_id" value="{{ $funding->loan_purpose_id }}">
                                                                <input type="hidden" name="loan_duration_id" value="{{ $funding->loan_duration_id }}">
                                                                <input type="hidden" name="loan_status_id" value="1">
                                                            @endif
                                                            @if($funding === null) <button type="button" class="btn btn-info" style="margin-top:20px;margin-bottom: 20px;" data-toggle="modal" data-target="#funding" title="You have no funding options set">Set Funding Options</button>
                                                            @else
                                                                <?php $loans = \App\FlClientsLoan::where('client_id',$client->id)->where('lender_id',$lender->id)->first()?>
                                                                @if ($loans === null)
                                                                    <button type="submit" class="btn btn-success" style="margin-top:20px;margin-bottom: 20px;" title="Click to apply for this loan"> Apply Now </button>
                                                                @else
                                                                    <button type="button" class="btn btn-dark" style="margin-top:20px;margin-bottom: 20px;" title="You have already applied for this loan" disabled > Application Submitted </button>
                                                                @endif
                                                            @endif
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
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
                                {{$lenders->links()}}
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
