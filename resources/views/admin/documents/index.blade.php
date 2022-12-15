@extends('admin.master')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    {{-- {{ url('admin/otherpost/create') }} --}}
                    <a href="{{ route('admin.documents.create') }}"><button class="btn-primary btn-sm"><i
                                class="fa fa-plus"></i>Add Other Document</button></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
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
                    <td>{{ $document->image ?? '' }}</td>
                    <td>{{ $document->file ?? '' }}</td>
                    <td>
                        
                        <a href="edit/{{ $document->id }}">
                            <div style="display: flex; flex-direction:row;">
                                <button type="button" class="btn-block btn-warning btn-sm"><i class="fas fa-edit"></i>
                                    Edit </button>
                        </a>
                        
                        <a href="{{ url('admin/documents/destroy/'.$document->id) }}">
                            <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                data-target="#modal-default" style="width:auto;"
                                onclick="replaceLinkFunction">Delete</button>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
