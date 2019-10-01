<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('pages.layouts.views.components.head')

<body class="light-version">
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="dream-load"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
@include('pages.layouts.views.components.header')
<!-- ##### Header Area End ##### -->

@yield('content')

<!-- ##### Footer Area Start ##### -->
@include('pages.layouts.views.components.consistent')
<!-- ##### Footer Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('pages.layouts.views.components.footer')
<!-- ##### Footer Area End ##### -->

<!-- ##### Scripts Area Start ##### -->
@include('pages.layouts.views.components.scripts')
<!-- ##### Scripts Area End ##### -->

</body>
</html>
