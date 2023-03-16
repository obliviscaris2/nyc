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



            <form id="quickForm" method="POST" action="{{ route('admin.coverimage.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $coverimage->id }}">
                <div class="card-body">

                {{-- <input type="hidden" name="id" value="{{ $about->id }}"> --}}
                <div class="form-group">
                    <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
                    <input style="width:auto;" type="text" name="title" class="form-control" id="title"
                        placeholder="Title" value="{{ $coverimage->title }}">
                </div>
               

              
                <div class="form-group">
                    <label for="image">Image</label><span style="color:red; font-size:large"> *</span>
                    <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                        placeholder="Image">
                    <img id="preview" src="{{ url('uploads/coverimage/' . $coverimage->image) }}"
                        style="max-width: 300px; max-height:300px" />
                </div>


               

            </div>


        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Update</button>
        </div>
        </form>



  


 






@stop
