@extends('admin.master')
 
 
@section('content') 
 <!-- Content Wrapper. Contains page content -->


 

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">{{ $page_title }}</h1> --}}
           {{-- <a href="{{ url('admin/posts/add') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Add Team Member</button></a>  --}}
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
        <form id="quickForm" method="POST" action="{{ route('OtherPost.update') }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $otherpost->id }}">
        {{-- <input type="hidden" name="id" value="{{ $about->id }}"> --}}
        <div class="form-group">
            <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
            <input style="width:auto;" type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $otherpost->title }}">
        </div>
        <div>
            <label for="description">Description</label><span style="color:red; font-size:large">
                *</span>
            <textarea style="max-width: 30%;" type="text" class="form-control" name="description" id="description"
                placeholder="Add Description" value="">{{ $otherpost->description }}</textarea>
        </div>
     
        <div class="form-group">
          

                <label for="contact_number">PDF</label><span style="color:red; font-size:large"> *</span>
                <input type="file" name="file" class="form-control" id="pdf" onchange="previewImage(event)" placeholder="PDF" required>

        </div>


        <div class="form-group" style="margin: auto;">
            <label>Type</label>
            <select class="form-control" name="type" value="{{ $otherpost->type }}">
                <option value="0" disabled selected>--Select Type --</option>
                <option value="notice">सुचना</option>
                <option value="publication">प्रकाशन</option>
                <option value="tender">बाेलपत्र
                </option>
                <option value="rules">ऐन तथा नियमावली</option>
                <option value="directot">निर्देशिका</option>
                <option value="press">प्रेस विज्ञप्ति</option>

                <option value="news">समाचार</option>
                <option value="other">अन्य</option>
            </select>
        </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update About</button>
        </div>
    </form>


  
        <!-- /.row -->
        <!-- Main row -->
   
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


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


