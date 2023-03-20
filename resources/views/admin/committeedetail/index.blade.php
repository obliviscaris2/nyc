@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href="{{ route('committee.file') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
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
                <th>Sn</th>
                <th>District</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($committeedetails as $cd)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $cd->district ?? '' }}</td>
                    <td>{{ $cd->name ?? '' }}</td>
                    <td>{{ $cd->address }}</td>
                    <td>{{ $cd->phone ?? '' }}</td>
                    <td>
                        
                        <a href="edit/{{ $cd->id }}">
                            <div style="display: flex; flex-direction:row;">
                                <button type="button" class="btn-block btn-warning btn-sm"><i class="fas fa-edit"></i>
                                    Edit </button>
                        </a>
                        
                        <a href="{{ url('admin/committeedetails/destroy/'.$cd->id) }}">
                            <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                data-target="#modal-default" style="width:auto;"
                                onclick="replaceLinkFunction">Delete</button>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $committeedetails->links() !!}
    </div>
@endsection