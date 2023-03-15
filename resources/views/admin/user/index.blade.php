@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href="{{ route('link.create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
                      Add New</button></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            {{-- <th>Action</th> --}}
          </tr>
        </thead>

        <tbody>
          @if ($users)
            @foreach ($users as $user )  
          <tr>
            <td>{{$user->name }}</td>
            <td>{{$user->email }}</td>
          
            {{-- <td>{{date("jS M, Y, srtotime",($row->created_at)) }}</td> --}}
            <td>{{ $user->created_at }}</td>
            {{-- <td>
              <a href="{{ url('admin/users/edit/'.$user->id) }}">
             <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Edit</button>
            </a>
            <a href="{{ url('admin/users/destroy/'.$user->id) }}">
             <button class="btn-danger btn-sm"><i class="fa fa-time"></i>Delete</button>
            </a>
            </td> --}}
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
       
    









  @stop