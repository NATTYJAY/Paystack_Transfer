@include('includes.pay-head')
@include('includes.pay-nav')
<!-- [ Preloader ] Start -->
@include('includes.modal')
<!-- [ Preloader ] End -->
<!-- [ content ] Start -->
@yield('contentLoad')
<!-- [ content ] End -->
@include('includes.pay-footer')