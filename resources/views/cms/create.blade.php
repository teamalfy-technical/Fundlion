<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

@extends('users.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <div class="layout-content">
        <div class="layout-content-body" style="background-color: #e0e0e0;font-weight: 700;">
            <!-- <div class="container"> -->
            <div class="row gutter-xs">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2 style="color: #000000;font-weight: 900;">Hi {{$session->name}}, <span style="font-weight: 100;">This is the cms create view </span></h2>
                </div>
            </div>
            <!-- </div> --><div class="row" style="margin-top: 30px;">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row gutter-xs">

                        <div class="col-lg-2 col-md-2">
                            <a style="color: #494949" href="{{route('users.messages.inbox')}}" class="text-dark">
                                <div class="card dash-hover" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <img width="32" height="32" src="{{asset('public/pages/assets/img/icons/review-icon.png')}}" alt="review">
                                            </div>
                                            <div class="media-middle media-body">
                                                <p class="text-dark" style="margin-top: 8px;line-height: normal;">Read All Inbox Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <a style="color: #494949" href="{{route('users.clients.loans')}}">
                                <div class="card dash-hover" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <img width="32" height="32" src="{{asset('public/pages/assets/img/icons/account-information-icon.png')}}" alt="account">
                                            </div>
                                            <div class="media-middle media-body">
                                                <p class="text-dark" style="margin-top: 8px;line-height: normal;">View All Client Loans</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <a style="color: #494949" href="{{route('users.clients')}}">
                                <div class="card dash-hover" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <img width="32" height="32" src="{{asset('public/pages/assets/img/icons/clipboard-icon.png')}}" alt="account">
                                            </div>
                                            <div class="media-middle media-body">
                                                <p class="text-dark" style="margin-top: 8px;line-height: normal;">See All My Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <a style="color: #494949" href="{{route('users.lenders')}}">
                                <div class="card dash-hover" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <img width="32" height="32" src="{{asset('public/pages/assets/img/icons/upload-arrow-icon.png')}}" alt="account">
                                            </div>
                                            <div class="media-middle media-body">
                                                <p class="text-dark" style="margin-top: 8px;line-height: normal;">See All Available Lenders</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <a style="color: #494949" href="#">
                                <div class="card dash-hover" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <img width="32" height="32" src="{{asset('public/pages/assets/img/icons/eye-icon.png')}}" alt="account">
                                            </div>
                                            <div class="media-middle media-body">
                                                <p class="text-dark" style="margin-top: 8px;line-height: normal;">View Reports</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <a style="color: #494949" href="{{route('users.account')}}" data-toggle="modal" data-target="#messages" >
                                <div class="card dash-hover" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <img width="32" height="32" src="{{asset('public/pages/assets/img/icons/account.png')}}" alt="account">
                                            </div>
                                            <div class="media-middle media-body">
                                                <p class="text-dark" style="margin-top: 8px;line-height: normal;">Manage My Account</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


    </div>



    <!-- <div class="layout-footer">
      <div class="layout-footer-body">
        <small class="version">Version 1.0.0</small>
        <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
      </div>
    </div> -->


@endsection
