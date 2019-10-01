<?php
$url = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$url);
$link = end($link_array);
$link = ucwords(str_replace("_"," ",$link));
?>

@extends('pages.layouts.views.layout')
@section('title', "$link :: Fund Lion")
@section('content')

    <!-- Hero start -->
    <?php
    $hero_title = 'Industry Specific Funding Options';
    $hero_subtitle = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text';

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
    <section class="about-us-area clearfix">
<?php echo htmlspecialchars_decode(stripslashes(urldecode( $home_page_data->content) ));  ?>
    </section>
    <section class="about-us-area clearfix">
        <div class="container" style="padding: 30px 15px;">

                        <div class="row">
            @foreach ($loans as $loan)

            <!-- <h1>loan</h1> -->
            
                 <div class="col-lg-3 col-lg-offset-1 col-md-2 col-md-offset-1 mt-15 col-loan">
                    <a href="{{route('pages.loans.details',$loan->title)}}" class="card midcards h-100 loan_cards">
                        <div class="card-body text-center">
                            <p><img src="{{asset("storage/app/cms/$loan->img")}}" class="icon_size"></p>
                            <!-- <i class="fa fa-handshake-o fa-2x"></i> -->
                            <p class="m-0 text-dark" style="line-height: 15px;">{{$loan->title}}</p>
                            <!-- <p class="m-0" style="color:#d63d01;line-height: 25px;">07479546755</p> -->
                        </div>
                    </a>
                </div>
           

            @endforeach
             </div>
        </div>

    </section>

@endsection