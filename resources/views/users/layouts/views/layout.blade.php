<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('users.layouts.views.components.head')

<body class="layout layout-header-fixed">

<!-- ##### Header Area Start ##### -->
@include('users.layouts.views.components.header')
<!-- ##### Header Area End ##### -->

<div class="layout-main">

<!-- ##### Header Area Start ##### -->
@include('users.layouts.views.components.sidebar')
<!-- ##### Header Area End ##### -->

@yield('content')

</div>
<!-- ##### Scripts Area Start ##### -->
@include('users.layouts.views.components.scripts')
<!-- ##### Scripts Area End ##### -->

</body>
</html>
