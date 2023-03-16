@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href=""><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
                      Add New</button></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->


  <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>File</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($publications as $publication)
            <tr data-widget="expandable-table" aria-expanded="false">
                <td>{{ $publication->title ?? '' }}</td>
                <td>{{ $publication->description ?? '' }}</td>
                <td>{{ $publication->image ?? '' }}</td>
                <td>{{ $publication->file ?? '' }}</td>
                <td>
                    {{-- "admin/otherpost/edit/{{ $otherpost->id }}" --}}
                        <a href=>
                            <div style="display: flex; flex-direction:row;">
                                <button type="button" class="btn btn-block btn-warning btn-sm"><i
                                        class="fas fa-edit"></i> Edit </button>
                        </a>
                        {{-- "{{ url('admin/otherpost/delete/'.$otherpost->id) }}" --}}
                        <a href=>
                          <button type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal"
                              data-target="#modal-default" style="width:auto;"
                              onclick="replaceLinkFunction">Delete</button>
                          </a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection