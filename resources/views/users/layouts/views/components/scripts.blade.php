<script src="{{asset('public/pages/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/elephant.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/application.min.js')}}"></script>
<script src="{{asset('public/pages/assets/css/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{asset('public/pages/assets/css/dropzone-master/dist/dropzone.js')}}"></script>

<!-- <script src="ckfinder/ckfinder.js"></script> -->


<!-- <script src="https://cdn.ckeditor.com/4.12.1/full-all/ckeditor.js"></script> -->
<script src="{{asset('public/pages/assets/ckeditor_old/ckeditor.js')}}"></script>



<script src="{{asset('public/ckfinder/ckfinder.js')}}"></script>


<script>
    // initSample();
</script>

  <script>

  var base_url = window.location.origin;

var host = window.location.host;

var pathArray = window.location.pathname.split( '/' );

console.log(base_url);
console.log(host);
console.log(pathArray);
  // CKFinder.setupCKEditor();
// CKEDITOR.customConfig = 'http://localhost/git/fundlion/public/pages/assets/ckeditor_old/config.js';

    CKEDITOR.replace('editor', {

      customConfig: 'http://localhost/git/fundlion/public/pages/assets/ckeditor_old/config.js',
      removePlugins: 'easyimage, cloudservices',
      extraPlugins: 'image2',

      allowedContent: true,
      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
      filebrowserBrowseUrl: 'http://localhost/git/fundlion/public/ckfinder/ckfinder.html?Type=Files',
      filebrowserImageBrowseUrl: 'http://localhost/git/fundlion/public/ckfinder/ckfinder.html?Type=Files',
      filebrowserUploadUrl: 'http://localhost/git/fundlion/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
      filebrowserImageUploadUrl: 'http://localhost/git/fundlion/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Image&responseType=json',

      // Upload dropped or pasted images to the CKFinder connector (note that the response type is set to JSON).
      uploadUrl: 'http://localhost/git/fundlion/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

      // Reduce the list of block elements listed in the Format drop-down to the most commonly used.
      format_tags: 'p;h1;h2;h3;pre',
      // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
      // removeDialogTabs: 'image:advanced;link:advanced',

      height: 450
    });


  </script>
  <script>
    // CKEDITOR.inline('editor');

// CKEDITOR.replace('editor',{

//   customConfig: 'config.js'
//   // extraPlugins: 'image2,uploadimage',
//   // removePlugins:'image',
//   // width: "500px",
//   // height: "400px"

// }); 
//     CKEDITOR.replace('editor', {
//     allowedContent = true;
//         // 'img[!src,alt,width,height]{max-width};' + // Note no {width,height}
//         // 'h1 h2 div'
// } );
  </script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-83990101-1', 'auto');
    ga('send', 'pageview');
</script>

 <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();


                // Used events
                var drEvent = $('.dropify-event').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.filename + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });
            });
        </script>
<script>
    $(document).ready(function(){
        $(".delete_file").click(function (event) {
            $(this).parents('.banks').remove();
        });
        $("#uploader").dropzone({ url: "/file/post" });
    });

    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
    });
</script>
<!--     <script>
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
    </script> -->
