@extends('admin.layouts.master')


@section('content')

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ $page_title }}</h1>
             <a href="{{ url('file-import-export-exe') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Import/Export Executive Details</button></a> 
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

      <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sn</th>
                <th>Name</th>
                <th>Image</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Position</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($executivedetails as $ed)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $ed->name ?? '' }}</td>
                    <td>{{ $ed->image ?? '' }}</td>
                    <td>{{ $ed->phone }}</td>
                    <td>{{ $ed->email ?? '' }}</td>
                    <td>{{ $ed->position ?? '' }}</td>
                    <td>
                        
                        {{-- <a href="edit/{{ $cd->id }}">
                            <div style="display: flex; flex-direction:row;">
                                <button type="button" class="btn-block btn-warning btn-sm"><i class="fas fa-edit"></i>
                                    Edit </button>
                        </a>
                        
                        <a href="{{ url('admin/committeedetails/destroy/'.$cd->id) }}">
                            <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                data-target="#modal-default" style="width:auto;"
                                onclick="replaceLinkFunction">Delete</button>
                        </a> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection