@extends('admin.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->





    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
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

            <div class="row">
                <div class="col-lg-8">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->all())
                            <div class="alert alert danger text-center">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>

                        @endif


                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Post Title</label>
                            <div class="col-sm-10">
                                <input value="{{ $row->title }}" id="title" type="text" class="form-control"
                                    placeholder="title" name="title" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input id="file" type="file" class="form-control" name="file"><br>
                                <img src="{{url('uploads/'.$row->image) }}" style="width: 200px">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select id="category_id" name="category_id" class="form-control">
                                    <option value="{{$row->category_id}}">
                                        {{$row->category}}
                                    </option>
                                </select>
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="summernote" class="col-sm-2 col-form-label">Post Content</label>
                            <div class="col-sm-10">
                                <textarea id="summernote" name="content">
                                    {{ $row->content }}"
                                 </textarea>
                            </div>
                        </div>

                        <input class="btn btn-primary" type="submit" value="Update">

                        <a href="{{ url('admin/posts')}}">
                            <input class="btn btn-success" style="float:right" type="button" value="Back">
                        </a>
                    </form>

                </div>

                <div class="col-lg-4"></div>


            </div>

            <!-- /.row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->









@stop
