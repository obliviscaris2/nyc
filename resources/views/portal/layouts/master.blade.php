<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

@include('portal.includes.head')

<style>
</style>

<body class="u-body u-xl-mode" data-lang="en">
   
    @include('portal.includes.nav')
    <section id="back">
    @yield('content')
</section>

    @include("portal.includes.footer")

    <script src="{{ asset('css/bootstrapjs/bootstrap.min.js') }}"></script>

</body>

</html>





{{-- @endsection --}}
