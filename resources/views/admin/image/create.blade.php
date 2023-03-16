@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                            Back</button></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->


        <form id="quickForm"  method="POST" action="{{ route('Image.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputEmail1">Image Description</label>
                <input type="text" name="img_desc" class="form-control" placeholder="Title" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="img" class="form-control" onchange="previewImage(event)"
                    required>
            </div>
            <img id="preview" style="max-width: 500px; max-height:500px" />

        

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Create Link</button>
        </div>
    </form>

      @if (isset($links) && is_array($links))
        
      
<div class="p-4">

      @foreach ($links as $link )
    
     <a href="{{ $link[1] }}">
        <button class="btn-primary">{{ $link[0] }}</button>
      </a>
      @endforeach
    </div>

    @endif
     








  @stop