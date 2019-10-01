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
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Add <span style="font-weight: 100;">New Loan Item</span></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-lg-offset-1">
                         @component('components.messages')@endcomponent
                        <form action="{{route('users.cms.new_loan_save')}}" method="post" role="form" enctype="multipart/form-data">
                         @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Image</label>
                            <input type="file" name="image" id="input-file-now-custom-1" class="dropify" />

                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"  name="title" required="">
                            </div>


                            <div class="form-group">
                                <label for="email" class="text-dark">Description</label>
                                <textarea  style="height: 200px;" class="form-control" id="description" placeholder="Another input" name="description"> </textarea>
                                                                    @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                                @enderror
                             </div>

    
                             <div class="form-group">
                                <label for="text-dark">Type</label>
                                <select class="form-control" name="type" >
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Save</button>

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
