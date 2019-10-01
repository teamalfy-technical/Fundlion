    <?php

    // $url = $_SERVER['REQUEST_URI'];
    // $link_array = explode('/',$url);
    // $link = end($link_array);
    // $link = ucwords(str_replace("_"," ",$link));

    use Illuminate\Support\Facades\DB;
    $link = end($link_array);

    $home_page_data = DB::table('fl_cms_pages')->where('name', $link)->first();
    $general_data = DB::table('fl_cms_general')->where('id', 1)->first();    
    // print_r($home_page_data);die();
    $hero_title = $home_page_data->banner_title;
    @$banner_pic = @$home_page_data->banner_pic;
    // print_r($hero_title);die();
    $hero_subtitle = $home_page_data->banner_text;

    ?>