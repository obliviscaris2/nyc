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


        <form id="quickForm" method="POST" action="{{ route('Team.update') }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $team->id }}">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <input type="text" name="role" value="{{ $team->role ?? '' }}" class="form-control" placeholder="Role" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{ $team->name ?? '' }}" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Position</label>
                <input type="text" name="position" value="{{ $team->position ?? '' }}" class="form-control" placeholder="Position" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" onchange="previewImage(event)" placeholder="Image"
                    >
            </div>
            <img id="preview" src="{{ asset('uploads/team/'.$team->image) }}" style="max-width: 500px; max-height:500px" />
            <div class="form-group">
                <label for="exampleInputEmail1">Contact Number</label>
                <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" value="{{ $team->contact_number }}" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $team->email }}" required>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Update Staff</button>
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