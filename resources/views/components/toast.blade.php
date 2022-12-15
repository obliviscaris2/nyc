@if ($errors->any())
    @foreach ($errors->all() as $err)
        <script>
            toastr.error("{!! $err !!}")
            })
        </script>
    @endforeach
@endif
@if (Session::has('success'))
    {{-- <h1>{{ Session::get('success') }}</h1> --}}
    <script>
        // console.log('hello');
        toastr.success("{!! Session::get('success') !!}");
    </script>
@endif
@if (Session::has('error'))
    {{-- <h1>{{ Session::get('error') }}</h1> --}}
    <script>
        toastr.error("{!! Session::get('error') !!}");
    </script>
@endif