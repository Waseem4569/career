<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ63XN9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!---TUF Header Starts Here---->
    <!-- Top Bar -->
    @include('frontend.layouts.header')

<!--TUF Header Ends Here--->   

<!-- Page Content  -->
<div class="wrapper">
        @yield('content')
</div>
<!-- Footer -->
@include('frontend.layouts.footer')
<!-- End Footer -->
<!-- script Content  -->
@include('frontend.layouts.scripts')