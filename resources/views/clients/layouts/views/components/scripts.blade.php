<script src="{{asset('public/pages/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/elephant.min.js')}}"></script>
<script src="{{asset('public/pages/assets/js/application.min.js')}}"></script>
<script src="{{asset('public/pages/assets/css/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{asset('public/pages/assets/css/dropzone-master/dist/dropzone.js')}}"></script>
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
        $(".delete_file").click(function (event) {
            $(this).parents('.banks').remove();
        });
        $("#uploader").dropzone({ url: "/file/post" });
    });
    </script>

<script type="text/javascript">

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $(document).ready(function(){
        $("#provider").on("change", function(){
            var dataSource = $(this).val();
            var ajaxUrl = '{{route("clients.provider")}}';
            console.log("working")

            $.ajax({
                url: ajaxUrl,
                type: 'post',
                data: {dataVal:dataSource},
                dataType: "json",
                async: true,
                cache: false,

                beforeSend: function (data) {
                    $('#ajaxMessage').html("<span style='color: #6495ed;'><img src='{{asset('public/pages/assets/img/default/ajax_loader.gif')}}' /> loading...</span>");
                },

                success: function (response) {
                    $('#ajaxMessage').html("<p style='color: rgba(232,232,232,0.83)'>Loan status updated</p>");
                    $('#loanAmount').html(response.loanAmount);

                    if(response.loanStatus == 0){
                        $('#applied').removeClass('activated');
                        $('#submitted').removeClass('activated');
                        $('#reviewing').removeClass('activated');
                        $('#approved').removeClass('activated');

                        document.getElementById("status_bar").style.width = "0%";
                    }
                    else if(response.loanStatus == 1){
                        $('#applied').addClass('activated');
                        $('#submitted').removeClass('activated');
                        $('#reviewing').removeClass('activated');
                        $('#approved').removeClass('activated');
                        document.getElementById("status_bar").style.width = "16%";
                    }
                    else if(response.loanStatus == 2){
                        $('#applied').addClass('activated');
                        $('#submitted').addClass('activated');
                        $('#reviewing').removeClass('activated');
                        $('#approved').removeClass('activated');
                        document.getElementById("status_bar").style.width = "42%";
                    }
                    else if(response.loanStatus == 3){
                        $('#applied').addClass('activated');
                        $('#submitted').addClass('activated');
                        $('#reviewing').addClass('activated');
                        $('#approved').removeClass('activated');
                        document.getElementById("status_bar").style.width = "66%";
                    }
                    else if(response.loanStatus == 4){
                        $('#applied').addClass('activated');
                        $('#submitted').addClass('activated');
                        $('#reviewing').addClass('activated');
                        $('#approved').addClass('activated');
                        document.getElementById("status_bar").style.width = "100%";
                    }
                },
                error: function (response) {
                    $('#ajaxMessage').html("<p style='color: rgba(255,0,0,0.67)'>Loan info not available</p>");
                    $('#loanAmount').html("00.00");
                    $('#applied').removeClass('activated');
                    $('#submitted').removeClass('activated');
                    $('#reviewing').removeClass('activated');
                    $('#approved').removeClass('activated');
                    document.getElementById("status_bar").style.width = "0%";
                }
            })
        })
    })

</script>