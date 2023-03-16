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

            
            <form id="quickForm" method="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $contact->id }}">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <br>

                    <label for="name">{{ $contact->name }}</label>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <br>
                    <label for="email">{{ $contact->email }}</label>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <br>
                    <label for="phone">{{ $contact->phone }}</label>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <br>
                    <label for="message">{{ $contact->message }}</label>
                </div>
            </form>
        
@endsection
