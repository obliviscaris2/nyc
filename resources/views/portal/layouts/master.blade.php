<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

@include('portal.includes.head')

<body class="u-body u-xl-mode" data-lang="en">
    @include('portal.includes.nav')

    @yield('content')

    @include("portal.includes.footer")

    <script src="{{ asset('css/bootstrapjs/bootstrap.min.js') }}"></script>

</body>

</html>





{{-- @endsection --}}
