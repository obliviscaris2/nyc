@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href="{{ route('admin.coverimage.create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
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
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($coverimages as $coverimage)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $coverimage->title ?? '' }}</td>
                  
                    <td > <img id="preview1"  src="{{ url('uploads/coverimage/' . $coverimage->image) }}"
                      style="width: 150px; height:150px" /></td>
                    <td>
                            {{-- <a href="edit/{{ $coverimage->id }}"> --}}
                                <div style="display: flex; flex-direction:row;">
                                  <button type="button" class="btn-warning button-size" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Update
                                  </button>
                                </div>
                            {{-- </a> --}}

                            {{-- <a href="{{ url('admin/coverimage/destroy/'.$coverimage->id) }}"> --}}
                              <button type="button" class="btn-danger button-size" data-bs-toggle="modal" data-bs-target="#exampleModals">
                                Delete
                              </button>
                              {{-- </a> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>

        @foreach ($coverimages as $coverimage )
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/coverimage/edit/' .$coverimage->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
          
        @endforeach

        {{-- for delete --}}
        @foreach ($coverimages as $coverimage )
        <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/coverimage/destroy/' .$coverimage->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
          
        @endforeach
    </table>
    {{ $coverimages->onEachSide(2)->links() }}
  
      <script>
        const previewImage1 = e => {
            const reader = new FileReader();
            reader.readAsDataURL(e.target.files[0]);
            reader.onload = () => {
                const preview = document.getElementById('preview1');
                preview.src = reader.result;
            };
        };
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })
      </script>
      
  
  
  
  
  
  
    @stop