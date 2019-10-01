<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));

// use Illuminate\Support\Facades\DB;

 // $lending_patners_slides_data = DB::table('fl_cms_lending_patners')->where('id', '>', 1)->get();

?>

@extends('users.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

<?php 
// echo '<pre>';
// print_r($data1);
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
                        <h2 style="color: #000000;font-weight: 900;">Edit <span style="font-weight: 100;">Career Info</span></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-lg-offset-1">
                         @component('components.messages')@endcomponent
                        <form action="{{route('users.cms.career_update')}}" method="post" role="form" enctype="multipart/form-data">
                         @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Image</label>
                                <input type="file" name="career_img" id="input-file-now-custom-1" class="dropify" data-default-file="{{asset("storage/app/$data->career_img")}}" />
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Job Image</label>
                                <input type="file" name="job_img" id="input-file-now-custom-1" class="dropify" data-default-file="{{asset("storage/app/$data->job_img")}}" />
                            </div>                            
                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="id" value="1">

                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="{{ $data->title}}" name="title" required="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2"> Text</label>

                                <textarea  style="height: 200px;" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="text">{{ $data->text}}</textarea>   

                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Save</button>

                        </form>

                    </div>
                </div>
<hr>
                                <div class="row" style="margin-top:50px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row gutter-xs">
                            <div class="col-lg-6 col-md-6">
                                <button type="button" class="btn btn-success"><a href="{{route('users.cms.add_career')}}" style="color: #fff;" >Create Job</a></button>
                            </div>
                        </div>
                    </div>
                </div>
<?php  //print_r($data1); ?>
                <div class="row" style="margin-top:50px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <!-- <hr style="margin-bottom: 50px;border: 1px solid #c2c2c2;"> -->
                        <div class="row gutter-xs">
                            <div class="col-lg-12">
                                <table class="table table-hover table-borderless" style="background-color: #e0e0e0;">
                                    <thead>
                                    <tr>
                                         <th class="text-left">#</th> 
                                        <th class="text-left">Position Type</th>
                                        <th class="text-left">Position</th>
                                        <th class="text-left">Team</th>
                                        <th class="text-left">Office</th>
                                        <th class="text-left">Desc</th>
                                        <!-- <th class="text-left">Image</th> -->

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data1 as $ldata)
                                    <tr class="white-rows">
                                        <td class="text-left"><b>{{$ldata->id}}</b></td>
                                        <td class="text-left"><b>{{$ldata->position_type}}</b></td>
                                        <td class="text-left"><b>{{$ldata->position}}</b></td>
                                        <td class="text-left"><b>{{$ldata->team}}</b></td>
                                        <td class="text-left"><b>{{$ldata->office}}</b></td>
                                        <td class="text-left"><b>{{ substr($ldata->job_desc, 0, 50)}}</b></td>
                                        <td class="text-left"><span class="expand-account icon icon-plus" data-toggle="collapse" data-target="#detail{{$ldata->id}}" class="clickable"></span></td>
                                    </tr>
                                    <td style="padding: 0;" colspan="7">
                                        <div id="detail{{$ldata->id}}" class="collapse">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <form action="{{ route('users.cms.career_update') }}" method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="col-lg-10 col-md-10">

                                                                <div class="form-group col-md-4">
                                                                    <label for="title" class="text-dark">Position Type</label>

                                                                    <input id="id" type="text" class="form-control @error('title') is-invalid @enderror" name="id" value="{{ $ldata->id }}"  autocomplete="id" style="display: none;">


                                                                    <input id="position_type" type="text" class="form-control @error('position_type') is-invalid @enderror" name="position_type" value="{{ $ldata->position_type }}" required autocomplete="position_type">

                                                                    @error('position_type')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label for="title" class="text-dark">Position</label>

                                                                    <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ $ldata->position }}" required autocomplete="position">

                                                                    @error('position')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label for="title" class="text-dark">Team</label>

                                                                    <input id="team" type="text" class="form-control @error('team') is-invalid @enderror" name="team" value="{{ $ldata->team }}" required autocomplete="team">

                                                                    @error('team')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="title" class="text-dark">Office</label>

                                                                    <input id="office" type="text" class="form-control @error('office') is-invalid @enderror" name="office" value="{{ $ldata->office }}" required autocomplete="office">

                                                                    @error('office')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>                                                                
                                                                <!-- <div class="form-group col-md-4">
                                                                    <label for="title" class="text-dark">Description</label>

                                                                    <input id="job_desc" type="text" class="form-control @error('job_desc') is-invalid @enderror" name="job_desc" value="{{ $ldata->job_desc }}" required autocomplete="job_desc">

                                                                    @error('job_desc')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>  -->

                                                                <div class="form-group col-md-4">
                                                                    <label for="job_desc" class="text-dark">Description</label>
                                                                    <textarea  style="height: 200px; width: 500px;" class="form-control" id="job_desc" placeholder="Another input" name="job_desc">{{ $ldata->job_desc}} </textarea>
                                                                    @error('job_desc')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-2 col-md-2">
                                                                <button type="button" class="btn btn-danger" style="width: 100%; margin: 25px 0 15px 0;" data-toggle="modal" href=""><a href="{{ url('admin/cms/delete_career') }}<?php echo "?id=".$ldata->id ?>" style="color: #fff;" >Delete  item</a></button>

                                                                <button type="submit" class="btn btn-success" style="width: 100%; margin: 25px 0 15px 0;">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-sm-12">
                                        <div class="dataTables_paginate paging_full_numbers text-center" id="demo-datatables-5_paginate">
                                            <ul class="pagination">
                                               {{$data1->links()}} 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                 <div class="row ">
                    <div class="col-lg-10 col-lg-offset-1">

                   
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <div class="img-picker"></div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Partner Name" value="Partner Name">
                                    </div>
                                    <div class="btn-group" id="status" data-toggle="buttons">
                                        <label class="btn btn-default btn-on btn-xs active">
                                            <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">IN USE</label>
                                        <label class="btn btn-default btn-off btn-xs ">
                                            <input type="radio" value="0" name="multifeatured_module[module_id][status]" data-toggle="modal" data-target="#loanModal">REMOVE</label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <div class="img-picker"></div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Partner Name" value="Partner Name">
                                    </div>
                                    <div class="btn-group" id="status" data-toggle="buttons">
                                        <label class="btn btn-default btn-on btn-xs active">
                                            <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">IN USE</label>
                                        <label class="btn btn-default btn-off btn-xs ">
                                            <input type="radio" value="0" name="multifeatured_module[module_id][status]">REMOVE</label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <div class="img-picker"></div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Partner Name" value="Partner Name">
                                    </div>
                                    <div class="btn-group" id="status" data-toggle="buttons">
                                        <label class="btn btn-default btn-on btn-xs active">
                                            <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">IN USE</label>
                                        <label class="btn btn-default btn-off btn-xs ">
                                            <input type="radio" value="0" name="multifeatured_module[module_id][status]">REMOVE</label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <div class="img-picker"></div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Partner Name" value="Partner Name">
                                    </div>
                                    <div class="btn-group" id="status" data-toggle="buttons">
                                        <label class="btn btn-default btn-on btn-xs active">
                                            <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">IN USE</label>
                                        <label class="btn btn-default btn-off btn-xs ">
                                            <input type="radio" value="0" name="multifeatured_module[module_id][status]">REMOVE</label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <div class="img-picker"></div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Partner Name" value="Partner Name">
                                    </div>
                                    <div class="btn-group" id="status" data-toggle="buttons">
                                        <label class="btn btn-default btn-on btn-xs active">
                                            <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">IN USE</label>
                                        <label class="btn btn-default btn-off btn-xs ">
                                            <input type="radio" value="0" name="multifeatured_module[module_id][status]">REMOVE</label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <div class="img-picker"></div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Partner Name" value="Partner Name">
                                    </div>
                                    <div class="btn-group" id="status" data-toggle="buttons">
                                        <label class="btn btn-default btn-on btn-xs active">
                                            <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked">IN USE</label>
                                        <label class="btn btn-default btn-off btn-xs ">
                                            <input type="radio" value="0" name="multifeatured_module[module_id][status]">REMOVE</label>
                                    </div>
                                </div>
                            </div>


                            <br>
                            <div class="row">
                                <div class="col container">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-left">Save Changes</button>
                                    </div>
                                </div>
                            </div>


                    

                    </div>
                </div> -->


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
