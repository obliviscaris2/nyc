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

                    @if ($row)
                        
                 
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
                            <label for="name" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input value="{{ $row->name }}" id="name" type="text" class="form-control"
                                    placeholder="Name" name="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input value="{{ $row->email }}" id="email" type="text" class="form-control"
                                    placeholder="Email" name="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input value="" id="password" type="text" class="form-control"
                                    placeholder="Password" name="password" autofocus>
                                    <small>Leave password empty if you don't want to change it.</small>
                            </div>
                        </div>

                   




                  
                        <input class="btn btn-primary" type="submit" value="Update">

                        <a href="{{ url('admin/users')}}">
                            <input class="btn btn-success" style="float:right" type="button" value="Back">
                        </a>
                    </form>
                    @else
                    <h4>Sorry couldn't find that category</h4>

                    <a href="{{ url('admin/users')}}">
                        <input class="btn btn-success" style="float:right" type="button" value="Back">
                    </a>
                    @endif

                </div>

                <div class="col-lg-4"></div>


            </div>

            <!-- /.row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->









@stop
