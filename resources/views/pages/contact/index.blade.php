<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
</script>
<script src="/js/app.js"></script>


@extends('pages.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- Hero start -->
    <?php
    // $hero_title = 'Contact Us';
    // $hero_subtitle = 'Sub-title goes here';
    use Illuminate\Support\Facades\DB;
    $link = end($link_array);
    $home_page_data = DB::table('fl_cms_pages')->where('name', $link)->first();
    $general_data = DB::table('fl_cms_general')->where('id', 1)->first();    
    $hero_title = $home_page_data->banner_title;
    @$banner_pic = @$home_page_data->banner_pic;
    $hero_subtitle = $home_page_data->banner_text;       
    ?>
    @include('pages.layouts.views.components.banner')
    <!-- Hero End -->

    <!-- body/contact form -->
    <section class="resume-section mt-40 mb-40 text-center" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="my-auto border contact_form_box ">
                        <h2 class="mb-4">Send us a message</h2>
                        @if(session('message'))
                            <div class='alert alert-success'>
                                {{ session('message') }}
                            </div>
                        @endif
                        @component('components.messages')@endcomponent
                        <form class="contact-form d-flex flex-column align-items-center" action="{{route('pages.contact.mail')}}" method="POST">
                            @csrf
                            <div class="form-group  w-100">
                                <input type="name" class="form-control" placeholder="Name" id="name" name="name" required />
                            </div>
                            <div class="form-group  w-100">
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required />
                            </div>
                            <div class="form-group  w-100">
                                <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject" required />
                            </div>
                            <div class="form-group w-100">
                                <textarea class="form-control" type="text" placeholder="Message" rows="3" id="message" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange btn-info  w-100">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-auto contact_form_box ">
                        <div class="mb-20">
                            <span>Call Us</span>
                            <h5><?php echo $general_data->telephone; ?> </h5>
                        </div>
                        <div class="mb-20">
                            <span>Email</span>
                            <h5><?php echo $general_data->email; ?> </h5>
                        </div>
                        <div class="mb-20">
                            <span>Mailing Address</span>
                            <h5>107 Crown Street,</h5>
                            <h5>W1G 2SA</h5>
                        </div>
                        <div class="mb-20">
                            <span>Support</span>
                            <h5><?php echo $general_data->support_email; ?></h5>
                        </div>
                        <span id="online_appointments_redirect"></span>
                        <div class="mb-20">
                            <span>Press</span>
                            <h5><?php echo $general_data->press_email; ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- book appointment -->
    <section>
        <div class="container">
            <h3 class="text-dark body_head">
                ONLINE APPOINTMENTS
            </h3>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="{{route('pages.appointment')}}" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="{{route('pages.appointment')}}" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <div class="row">
                <div class="col-md-6">
                    <div class="card-block event_body">
                        <h5 class="card-title news_heading">Business Loans & Corporate Lending</h5>
                        <div class="card-text">
                            <div>
                                <i class="fa fa-calendar orange"></i> 30 min | Free
                            </div>
                            <div class="">
                                <i class="fa fa-map-marker orange fa-lg"></i> Olympia, London
                            </div>
                        </div>
                        <div class="card-text event_text">
                            Conference call to discuss your business financing requirements.
                        </div>

                    </div>
                </div>
                <div class="col-md-6 display-table">
                    <div class="text-center display-table-cell">
                        <a href="{{route('pages.appointment')}}" class="btn btn-orange mt-20">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection