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
                        <h2 style="color: #000000;font-weight: 900;">Edit <span style="font-weight: 100;">Busness Model</span></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-lg-offset-1">
                         @component('components.messages')@endcomponent
                        <form action="{{route('users.cms.business_model_update')}}" method="post" role="form">
                         @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="{{ $data->title}}" name="title" required="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Sub Title</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value="{{ $data->subtitle}}" name="subtitle" required="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Counter 1</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value="{{ $data->line_of_credit1}}" name="line_of_credit1" required="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Counter 2</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value="{{ $data->line_of_credit2}}" name="line_of_credit2" required="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Counter 3</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value="{{ $data->line_of_credit3}}" name="line_of_credit3" required="">
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput2">Body</label>
                                <textarea class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="text" required="" style="height: 200px;" >{{ $data->text}} </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Save Changes</button>

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
