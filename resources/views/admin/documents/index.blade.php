@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
            <a href="{{ route('admin.documents.create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
              Add New</button></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->


    @if (session('successMessage'))
        <div class="alert alert-success">
            {!! session('successMessage') !!}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif

    <!-- /.content-header -->

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Type</th>
                <th>Title</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Image</th>
                <th>File</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $document->type ?? '' }}</td>
                    <td>{{ $document->title ?? '' }}</td>
                    <td>{{ $document->description ?? '' }}</td>
                    <td>{{ $document->slug }}</td>
                    <td><img id="preview" src="{{ url('uploads/documents/image/' . $document->image) }}"
                        style="width: 100px; height:100px; object-fit:cover;" /></td>
                    <td><iframe src="{{ asset('uploads/documents/file/' . $document->file) }}" title="" style="width: 100px; height:100px;"></iframe>
                    <td>

                        {{-- <a href="edit/{{ $document->id }}"> --}}
                        <div style="display: flex; flex-direction:row;">
                            <button type="button" class="btn-warning button-size" data-bs-toggle="modal"
                                data-bs-target="#exampleModals">
                                Update
                            </button>
                            {{-- </a> --}}

                            {{-- <a href="{{ url('admin/documents/destroy/'.$document->id) }}"> --}}
                            <button type="button" class="btn-danger button-size" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Delete
                            </button>
                            {{-- </a> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>
        @foreach ($documents as $document)
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                            <a href="{{ url('admin/documents/destroy/' . $document->id) }}">
                                <button type="button" class="btn btn-danger">Yes
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- for edit --}}
        @foreach ($documents as $document)
            <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                            <a href="{{ url('admin/documents/edit/' . $document->id) }}">
                                <button type="button" class="btn btn-danger">Yes
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </table>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
@endsection
