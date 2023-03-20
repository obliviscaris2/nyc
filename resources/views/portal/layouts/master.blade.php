<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

@include('portal.includes.head')

<<<<<<< HEAD
<style>
</style>

<body class="u-body u-xl-mode" data-lang="en">
   
    @include('portal.includes.nav')
    <section id="back">
=======
<body class="u-body u-xl-mode" data-lang="en">
    @include('portal.includes.nav')

>>>>>>> b7741def0c905f8598fbb216231ec228e89b24a5
    @yield('content')
</section>

    @include("portal.includes.footer")

    <script src="{{ asset('css/bootstrapjs/bootstrap.min.js') }}"></script>

</body>

</html>





{{-- @endsection --}}
