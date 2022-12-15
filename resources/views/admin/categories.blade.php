@extends('admin.master')
 
 
@section('content') 
 <!-- Content Wrapper. Contains page content -->


 

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
           <a href="{{ url('admin/categories/add') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Add Categories</button></a> 
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Category</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @if ($rows)
            @foreach ($rows as $row )  
          <tr>
            <td>{{$row->category }}</td>
          
            {{-- <td>{{date("jS M, Y, srtotime",($row->created_at)) }}</td> --}}
            <td>{{ $row->created_at }}</td>
            <td>
              <a href="{{ url('admin/categories/edit/'.$row->id) }}">
             <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Edit</button>  
            </a>
            <a href="{{ url('admin/categories/delete/'.$row->id) }}">
             <button class="btn btn-danger btn-sm"><i class="fa fa-time"></i>Delete</button>
            </a>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
       
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->









  @stop