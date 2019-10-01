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

<style type="text/css">
    .container img{
        max-width: 100%;
    }
</style>
        <div class="layout-content">
            <div class="layout-content-body container" style="background-color: #e0e0e0;font-weight: 700; min-height:100vh;">
                <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Edit <span style="font-weight: 100; text-transform: capitalize;">{{$data->name}}</span></h2>
                    </div>
                </div>

                <div class="row ">

                <div class="adjoined-top">
                    <div class="grid-container">
                        <div class="content grid-width-100">
                            <h1>You can edit your content now !</h1>
                        </div>
                    </div>
                </div>
                    <div class="adjoined-bottom">
                        <div class="grid-container">
                            <div class="grid-width-100">
                                <!-- <div id="editor"> -->
                                @component('components.messages')@endcomponent
                                
                                <form action="{{route('users.cms.pages_update')}}" method="get" role="form" enctype="multipart/form-data" >
                                    <input type="text" name="page" value="<?php echo $_GET['name']; ?>" hidden>
                                   <textarea id='editor' name='content' >
                                    <?php echo htmlspecialchars_decode(stripslashes(urldecode( $data->content) ));  ?>                       

                                   </textarea><br>

                                   <input type="submit" name="submit"  class="btn btn-primary "  value="Save">
                                </form>
                                <!-- </div> -->

                            </div>
                        </div>
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
