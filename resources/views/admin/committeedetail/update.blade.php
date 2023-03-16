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
      
        <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.committeedetails.update') }}"
        enctype="multipart/form-data">
        @csrf
        <input name="id" id="" value = "{{ $committeedetail->id }}" hidden>
        

        <div class="card-body">
            <div class="form-group">
                <label for="district">District</label>
                <input style="width:auto;" type="text" name="district" class="form-control" id="title" value="{{ $committeedetail->district }}" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input style="width:auto;" type="text" name="name" class="form-control" id="name" value="{{ $committeedetail->name }}">
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input style="width:auto;" type="text" name="address" class="form-control" id="address" value="{{ $committeedetail->address }}">
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input style="width:auto;" type="text" name="phone" class="form-control" id="phone" value="{{ $committeedetail->phone }}">
            </div>
            

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Submit</button>
        </div>
    </form>



    <script>
        const previewImage = e => {
            const reader = new FileReader();
            reader.readAsDataURL(e.target.files[0]);
            reader.onload = () => {
                const preview = document.getElementById('preview');
                preview.src = reader.result;
            };
        };
    </script>






  @stop