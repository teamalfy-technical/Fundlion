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
                        <h2 style="color: #000000;font-weight: 900;">Edit <span style="font-weight: 100;">About Us</span></h2>
                    </div>
                </div>

 <style type="text/css">
    .cke_textarea_inline {
      border: 1px solid #ccc;
      padding: 10px;
      min-height: 300px;
      background: #fff;
      color: #000;
    }
  </style>
  <form action="https://d1.ckeditor.com/savetextarea/savetextarea.php" method="post">
    <textarea cols="80" id="editor2" name="editor2" rows="10">
&lt;h1&gt;&lt;img alt=&quot;Saturn V carrying Apollo 11&quot; style=&quot;float:right;margin:10px&quot; src=&quot;assets/sample.jpg&quot;/&gt; Apollo 11&lt;/h1&gt;

&lt;p&gt;&lt;strong&gt;Apollo 11&lt;/strong&gt; was the spaceflight that landed the first humans, Americans &lt;a href=&quot;http://en.wikipedia.org/wiki/Neil_Armstrong&quot;&gt;Neil
Armstrong&lt;/a&gt; and
&lt;a href=&quot;http://en.wikipedia.org/wiki/Buzz_Aldrin&quot;&gt;Buzz Aldrin&lt;/a&gt;, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the
lunar surface 6 hours
later on July 21 at 02:56 UTC.&lt;/p&gt;

&lt;p&gt;Armstrong spent about &lt;s&gt;three and a half&lt;/s&gt; two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&amp;nbsp;kg)
of lunar
material for return to Earth. A third member of the mission, &lt;a href=&quot;http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)&quot;&gt;Michael Collins&lt;/a&gt;, piloted
the
&lt;a href=&quot;http://en.wikipedia.org/wiki/Apollo_Command/Service_Module&quot;&gt;command&lt;/a&gt; spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for
the trip back to
Earth.&lt;/p&gt;
</textarea>

    <p><input type="submit" value="Submit"></p>
    
<section class="about-us-area clearfix">

        <div class="container" style="padding: 30px 15px;">

<!-- {{ $data->content}} -->

<!-- {{ urldecode($data->content) }} -->


<?php 

// echo htmlspecialchars_decode(stripslashes(urldecode( $data->content) )); 


 ?>
<?php 

// echo urlencode('<div class="container" style="padding: 30px 15px;">

//             <div class="row">
//                 <div class="col-lg-12">

//                     <h3 class="text-dark">About Us</h3>

//                     <p class="text-dark">
//                         FundLion enables companies to raise capital through our Business Lending Marketplace and Loans Comparison Platform
//                         connecting businesses directly to a large community of institutional lenders, banks, debt funds, industry specific
//                         finance specialists and alternative lending platforms. Fundlion plans to make it quick and easy for any company to
//                         compare and apply for business loans through our platform.
//                     </p>

//                     <p class="text-dark">
//                         The Fundlion Marketplace aims to offer more choice and lower costs of fund raising for businesses. Fundlion does not
//                         charge any fees to the business for raising funds from its platform and instead gets paid commissions and broker fees
//                         from the Lenders. The Fundlion platform also matches lenders according to the industry sector, credit profile, purpose
//                         of loan and individual lending requirements of the businesses applying for the loans.
//                     </p>

//                 </div>
//             </div>

//             <div class="row mt-5">

//                 <div class="col-lg-6 col-md-6">
//                     <img src="http://localhost/git/fundlion/public/pages/assets/img/bg-img/aboutus.png" style="max-width: 100%;">
//                 </div>

//                 <div class="col-lg-6 col-md-6">
//                     <p class="text-dark">
//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
//                     </p>
//                 </div>

//             </div>

//             <div class="row mt-50">

//                 <div class="col-12">

//                     <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

//                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreincididunt ut labore et dolore magna aliqua.

//                     </p>

//                 </div>

//             </div>

//         </div>
// '); 

echo urldecode('


%3Cdiv+class%3D%22container%22+style%3D%22padding%3A+30px+15px%3B%22%3E%0D%0A%0D%0A++++++++++++%3Cdiv+class%3D%22row%22%3E%0D%0A++++++++++++++++%3Cdiv+class%3D%22col-lg-12%22%3E%0D%0A%0D%0A++++++++++++++++++++%3Ch3+class%3D%22text-dark%22%3EAbout+Us%3C%2Fh3%3E%0D%0A%0D%0A++++++++++++++++++++%3Cp+class%3D%22text-dark%22%3E+%3C%21--removed+%28%22text-dark%22%29+class--%3E%0D%0A++++++++++++++++++++++++FundLion+enables+companies+to+raise+capital+through+our+Business+Lending+Marketplace+and+Loans+Comparison+Platform%0D%0A++++++++++++++++++++++++connecting+businesses+directly+to+a+large+community+of+institutional+lenders%2C+banks%2C+debt+funds%2C+industry+specific%0D%0A++++++++++++++++++++++++finance+specialists+and+alternative+lending+platforms.+Fundlion+plans+to+make+it+quick+and+easy+for+any+company+to%0D%0A++++++++++++++++++++++++compare+and+apply+for+business+loans+through+our+platform.%0D%0A++++++++++++++++++++%3C%2Fp%3E%0D%0A%0D%0A++++++++++++++++++++%3Cp+class%3D%22text-dark%22%3E%0D%0A++++++++++++++++++++++++The+Fundlion+Marketplace+aims+to+offer+more+choice+and+lower+costs+of+fund+raising+for+businesses.+Fundlion+does+not%0D%0A++++++++++++++++++++++++charge+any+fees+to+the+business+for+raising+funds+from+its+platform+and+instead+gets+paid+commissions+and+broker+fees%0D%0A++++++++++++++++++++++++from+the+Lenders.+The+Fundlion+platform+also+matches+lenders+according+to+the+industry+sector%2C+credit+profile%2C+purpose%0D%0A++++++++++++++++++++++++of+loan+and+individual+lending+requirements+of+the+businesses+applying+for+the+loans.%0D%0A++++++++++++++++++++%3C%2Fp%3E%0D%0A%0D%0A++++++++++++++++%3C%2Fdiv%3E%0D%0A++++++++++++%3C%2Fdiv%3E%0D%0A%0D%0A++++++++++++%3Cdiv+class%3D%22row+mt-5%22%3E%0D%0A%0D%0A++++++++++++++++%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%0D%0A++++++++++++++++++++%3Cimg+src%3D%22http%3A%2F%2Flocalhost%2Fgit%2Ffundlion%2Fpublic%2Fpages%2Fassets%2Fimg%2Fbg-img%2Faboutus.png%22+style%3D%22max-width%3A+100%25%3B%22%3E%0D%0A++++++++++++++++%3C%2Fdiv%3E%0D%0A%0D%0A++++++++++++++++%3Cdiv+class%3D%22col-lg-6+col-md-6%22%3E%0D%0A++++++++++++++++++++%3Cp+class%3D%22text-dark%22%3E%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A++++++++++++++++++++%3C%2Fp%3E%0D%0A++++++++++++++++%3C%2Fdiv%3E%0D%0A%0D%0A++++++++++++%3C%2Fdiv%3E%0D%0A%0D%0A++++++++++++%3Cdiv+class%3D%22row+mt-50%22%3E%0D%0A%0D%0A++++++++++++++++%3Cdiv+class%3D%22col-12%22%3E%0D%0A%0D%0A++++++++++++++++++++%3Cp+class%3D%22text-dark%22%3ELorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A%0D%0A++++++++++++++++++++++++Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+laboreincididunt+ut+labore+et+dolore+magna+aliqua.%0D%0A%0D%0A++++++++++++++++++++%3C%2Fp%3E%0D%0A%0D%0A++++++++++++++++%3C%2Fdiv%3E%0D%0A%0D%0A++++++++++++%3C%2Fdiv%3E%0D%0A%0D%0A++++++++%3C%2Fdiv%3E%0D%0A        
'); 
?>
        </div>

    </section>

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
