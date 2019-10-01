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
                        <h2 style="color: #000000;font-weight: 900;">Edit <span style="font-weight: 100;">Footer</span></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-lg-offset-1">
                         @component('components.messages')@endcomponent
                        <form action="{{route('users.cms.footer_update')}}" method="post" role="form">
                         @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Banner</label>
                                <div class="img-picker"></div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Disclaimer</label>
                                <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="{{ $data->disclaimer}}" name="disclaimer" required=""> -->
                                 <textarea  style="height: 200px;" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="disclaimer">{{ $data->disclaimer}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Save</button>

                        </form>

                    </div>
                </div>



                <div class="row" style="margin-top: 30px;" hidden>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/review-icon.png" alt="review">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Review Existing Loan Application
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/account-information-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Upload Account Information
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/clipboard-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Apply for a New Loan
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/upload-arrow-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Upload Documents
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">
                                                <a href="#">
                                                    <img width="32" height="32" src="img/icons/eye-icon.png" alt="account">
                                                </a>
                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #494949" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Explore Lenders
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="card bg-success" style="border-radius: 20px; box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9); height: 120px;">
                                    <div class="card-header no-border">
                                        <div class="media text-center">
                                            <div class="media-middle media-center">

                                            </div>
                                            <div class="media-middle media-body">
                                                <a style="color: #ffffff" href="#">
                                                    <p class="text-dark" style="margin-top: 8px;line-height: normal;">
                                                        Set an Appointment with a Fundlion Account manager
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs" style="margin-top: 30px;" hidden>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="card h-100" style="border-radius:20px;background: rgb(74,74,74);background: linear-gradient(0deg, #5a5a5a 0%, #a0a0a0 100%);">
                            <div id="black-card"></div>
                            <div class="card-body">
                                <h4 class="text-center m-0" style="color: #fff;">Loan Application Status</h4>
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-sm-3 control-label" for="form-control-6" style="color: #fff;line-height: 35px;font-weight: 100;font-size: 15px;">Provider: </label>
                                                        <div class="col-sm-9">
                                                            <select id="form-control-6" class="form-control" style="background-color: #ffffff00;color: #bfbfbf;border: 2px solid #fff;">
                                                                <option value="">Barclays</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-center" style="color: #fff;line-height: 30px;font-size: 15px;font-weight: 400;">Loan Amount: £3,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="steps">
                                            <ul class="steps-container">
                                                <li style="width:25%;" class="activated">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Applied</div>
                                                    </div>
                                                </li>
                                                <li style="width:25%;" class="activated">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Submitted</div>
                                                    </div>
                                                </li>
                                                <li style="width:25%;" class="activated">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Reviewing</div>
                                                    </div>
                                                </li>
                                                <li style="width:25%;">
                                                    <div class="step">
                                                        <div class="step-image"><span></span></div>
                                                        <div class="step-current">Approved</div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="step-bar" style="width: 65%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutter-xs" style="margin-top: 30px;" hidden>
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                        <div class="card h-100" style="border-radius:20px;">
                            <div class="card-body">
                                <h4 class="text-center" style="font-weight: 900;font-size: 25px;">See Your Funding Options</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                                        <form style="margin-top: 30px;">
                                            <div class="input-group" style="margin: 14px 0;">
                                                <span class="input-group-addon">£</span>
                                                <input class="form-control" type="number" placeholder="How much  finance do you need?">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" style="font-size: 12px;height: 32px;margin: 10px 0">
                                                    <option>What is the finance for?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" style="font-size: 12px;height: 32px;">
                                                    <option>How long do you need the finance for?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn bg-success" style="width: 100%; color: #fff;border-radius: 15px;">CONTINUE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutter-xs" style="margin-top: 30px;" hidden>
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;">
                        <div class="card h-100" style="border-radius:20px;">
                            <div class="card-body">
                                <h4 class="text-center">Banks & Online Lending Options</h4>
                                <div class="row" style="margin-top: 30px;overflow-x: auto;white-space: nowrap;">
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/lloyds.jpg" alt="Lloyds">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/HSBC.jpg" alt="HSBC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Halifax.jpg" alt="Halifax">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Barclays.jpg" alt="Barclays">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/lloyds.jpg" alt="Lloyds">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/HSBC.jpg" alt="HSBC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Halifax.jpg" alt="Halifax">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banks col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-image">
                                                <img class="card-img img-responsive" style="box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.9);border-radius: 15px;" src="img/partners/Barclays.jpg" alt="Barclays">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

 <script>
        (function($) {

            $.fn.imagePicker = function(options) {

                // Define plugin options
                var settings = $.extend({
                    // Input name attribute
                    name: "",
                    // Classes for styling the input
                    class: "form-control btn btn-default btn-block",
                    // Icon which displays in center of input
                    icon: "fa fa-plus fa-lg" //glyphicon glyphicon-plus
                }, options);

                // Create an input inside each matched element
                return this.each(function() {
                    $(this).html(create_btn(this, settings));
                });

            };

            // Private function for creating the input element
            function create_btn(that, settings) {
                // The input icon element
                var picker_btn_icon = $('<i class="' + settings.icon + '"></i>');

                // The actual file input which stays hidden
                var picker_btn_input = $('<input type="file" name="' + settings.name + '" />');

                // The actual element displayed
                var picker_btn = $('<div class="' + settings.class + ' img-upload-btn"></div>')
                    .append(picker_btn_icon)
                    .append(picker_btn_input);

                // File load listener
                picker_btn_input.change(function() {
                    if ($(this).prop('files')[0]) {
                        // Use FileReader to get file
                        var reader = new FileReader();

                        // Create a preview once image has loaded
                        reader.onload = function(e) {
                            var preview = create_preview(that, e.target.result, settings);
                            $(that).html(preview);
                        }

                        // Load image
                        reader.readAsDataURL(picker_btn_input.prop('files')[0]);
                    }
                });

                return picker_btn
            };

            // Private function for creating a preview element
            function create_preview(that, src, settings) {

                // The preview image
                var picker_preview_image = $('<img src="' + src + '" class="img-responsive img-rounded" />');

                // The remove image button
                var picker_preview_remove = $('<button class="btn btn-link"><small>Remove</small></button>');

                // The preview element
                var picker_preview = $('<div class="text-center"></div>')
                    .append(picker_preview_image)
                    .append(picker_preview_remove);

                // Remove image listener
                picker_preview_remove.click(function() {
                    var btn = create_btn(that, settings);
                    $(that).html(btn);
                });

                return picker_preview;
            };

        }(jQuery));

        $(document).ready(function() {
            $('.img-picker').imagePicker({
                name: 'images'
            });
        })
    </script>
    <!-- <div class="layout-footer">
      <div class="layout-footer-body">
        <small class="version">Version 1.0.0</small>
        <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
      </div>
    </div> -->


@endsection
