@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href="{{ route('admin.video.create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
                      Add New</button></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

  
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
                        {{-- <a href="/admin/video/edit/{{ $video->id }}"> --}}
                            <div style="display: flex; flex-direction:row;">
                              <button type="button" class="btn-warning button-size" data-bs-toggle="modal" data-bs-target="#exampleModals">
                                Update
                              </button>
                        {{-- </a> --}}
                        {{-- <a href="{{ url('admin/video/delete/'.$video->id) }}"> --}}
                        {{-- <button type="button" class="btn-block btn-danger btn-sm button-size" data-toggle="modal"
                            data-target="#modal-default" style="width:auto;"
                            onclick="replaceLinkFunction">Delete</button> --}}
                            <button type="button" class="btn-danger button-size" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Delete
                            </button>

                        {{-- </a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>

        @foreach($videos as $video)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/video/delete/' .$video->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>


        @endforeach

        {{-- Update --}}
        @foreach($videos as $video)
        <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/video/edit/' .$video->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>


        @endforeach
    </table>
  
        </div>
      </section>
     
      <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
  
        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })
      </script>
  
  
  
  
  
  
  
  
    @stop