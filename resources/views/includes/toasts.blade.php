@if ($errors->any())
    @foreach ($errors->all() as $err)
        <script>
            $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Error',
            body: '{!! $err !!}'
        })
        </script>
    @endforeach
@endif
@if (session()->has('successMessage'))
        <script>
            $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Success',
            body: '{!! session()->get('successMessage') !!}'
        })
        </script>
@endif
@if (session()->has('errorMessage'))
        <script>
            $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Error',
            body: '{!! session()->get('errorMessage') !!}'
        })
        </script>
@endif