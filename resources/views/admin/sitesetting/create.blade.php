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

    <form id="quickForm" method="POST" action="{{ route('Sitesetting.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Government Name</label>
                    <input type="text" name="govn_name" class="form-control"
                         placeholder="Government Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ministry Name</label>
                    <input type="text" name="ministry_name" class="form-control"
                         placeholder="Ministry Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Department Name</label>
                    <input type="text" name="department_name" class="form-control"
                         placeholder="Department Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Office Name</label>
                    <input type="text" name="office_name" class="form-control"
                         placeholder="Office Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Office Address</label>
                    <input type="text" name="office_address" class="form-control"
                         placeholder="Address">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Office Contact</label>
                    <input type="text" name="office_contact" class="form-control"
                         placeholder="Office Contact">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Office Email</label>
                    <input type="email" name="office_mail" class="form-control"
                         placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Main Logo</label>
                    <input type="file" name="main_logo" class="form-control"
                         placeholder="Main Logo">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Side Logo</label>
                    <input type="file" name="side_logo" class="form-control"
                         placeholder="Side Logo">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook URL</label>
                    <input type="url" name="face_link"  class="form-control"
                         placeholder="Facebook URL (https://)" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Insta URL</label>
                    <input type="url" name="insta_link" class="form-control"
                         placeholder="Insta URL (https://)" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Social URL</label>
                    <input type="url" name="social_link" class="form-control"
                         placeholder="LinkedIN URL (https://)" >
                </div>
              
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn-primary">Apply</button>
        </div>
    </form>











  @stop

