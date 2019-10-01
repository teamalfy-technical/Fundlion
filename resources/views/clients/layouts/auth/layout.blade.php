<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('clients.layouts.auth.components.head')

<body class="light-version">
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="dream-load"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
@include('clients.layouts.auth.components.header')
<!-- ##### Header Area End ##### -->

@yield('content')

<div class="clearfix"></div>

<!-- ##### Footer Area Start ##### -->
@include('clients.layouts.auth.components.footer')
<!-- ##### Footer Area End ##### -->

<!-- ##### Scripts Area Start ##### -->
@include('clients.layouts.auth.components.scripts')
<!-- ##### Scripts Area End ##### -->

</body>
</html>
