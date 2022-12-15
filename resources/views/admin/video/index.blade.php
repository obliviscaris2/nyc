





  @extends('admin.master')
 
 
  @section('content') 
   <!-- Content Wrapper. Contains page content -->
  
  
   
  
      
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ $page_title }}</h1>
             <a href="{{ url('admin/video/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Video</button></a> 
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
  
      <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Video Description</th>
                <th>Video URL</th>
            
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $video->vid_desc ?? '' }}</td>
                    <td>{{ $video->vid_url ?? '' }}</td>
                    
                    <td>
                        <a href="/admin/video/edit/{{ $video->id }}">
                            <div style="display: flex; flex-direction:row;">
                                <button type="button" class="btn-block btn-warning btn-sm"><i
                                        class="fas fa-edit"></i> Update </button>
                        </a>
                        <a href="{{ url('admin/video/delete/'.$video->id) }}">
                        <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                            data-target="#modal-default" style="width:auto;"
                            onclick="replaceLinkFunction">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
  
      
  
  
          <!-- /.row -->
          <!-- Main row -->
     
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  
  
  
  
  
  
  
  
  
    @stop