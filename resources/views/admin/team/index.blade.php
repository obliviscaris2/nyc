@extends('admin.master')
 
 
@section('content') 
 <!-- Content Wrapper. Contains page content -->


 

    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
           <a href="{{ url('admin/team/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Team Member</button></a> 
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
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>Contact No.</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $team->name ?? '' }}</td>
                        <td>{{ $team->position ?? '' }}</td>
                        <td><img src="{{ url('storage/' . $team->image) ?? '' }}" id="preview"
                                style="max-width: 150px; max-height:150px" /></td>
                        <td>{{ $team->contact_number ?? '' }}</td>
                        <td>{{ $team->email ?? '' }}</td>
                        <td>
                            <a href="/admin/team/edit/{{ $team->id }}">
                                <div style="display: flex; flex-direction:row;">
                                    <button type="button" class="btn-block btn-warning btn-sm"><i
                                            class="fas fa-edit"></i> Update </button>
                            </a>
                            <a href="{{ url('admin/team/delete/'.$team->id) }}">
                            <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                data-target="#modal-default" style="width:auto;"
                                onclick="replaceLinkFunction">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


      @if (isset($links) && is_array($links))
        
      
<div class="p-4">

      @foreach ($links as $link )
    
     <a href="{{ $link[1] }}">
        <button class="btn btn-primary">{{ $link[0] }}</button>
      </a>
      @endforeach
    </div>

    @endif
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