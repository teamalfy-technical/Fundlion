<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

@extends('users.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

<?php 
// echo '<pre>';
// print_r($data);
// echo '</pre>';
// die(); 
?>
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/elephant.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/pages/assets/css/application.min.css')}}">
        <div class="layout-content">
            <div class="layout-content-body container" style="background-color: #e0e0e0;font-weight: 700; min-height:100vh;">
                <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Delete <span style="font-weight: 100;"> Loan Item No {{ $_GET['id'] }}</span></h2>
                        <br>

                            <form action="{{route('users.cms.delete_faqp')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5><span class="text-danger text-center">Are you sure you want to delete this Record? This cannot be undone!</span></h5>
                                                <input type="hidden" name="id" value="{{$_GET['id']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-danger">{{__("Yes")}}</button>
                                    <button type="button" class="btn btn-outline-secondary"><a href="{{route('users.cms.faq')}}" style="color: #000;" >{{__("No")}}</a></button>
                                    </div>
                                </div>

                            </form>
                    </div>
                </div>


                <!-- </div> -->
            </div>
        </div>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script src="{{asset('public/pages/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/elephant.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/application.min.js')}}"></script>


    <!-- <div class="layout-footer">
      <div class="layout-footer-body">
        <small class="version">Version 1.0.0</small>
        <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
      </div>
    </div> -->


@endsection
