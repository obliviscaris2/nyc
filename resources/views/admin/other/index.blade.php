@extends('admin.master')


@section('content')
@if(session('successMessage'))
<div class="alert alert-success">
  {!! session('successMessage') !!}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {!! session('error') !!}
</div>
@endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    {{-- {{ url('admin/otherpost/create') }} --}}
                    <a href="{{ route('admin.other.create') }}"><button class="btn-primary btn-sm"><i
                                class="fa fa-plus"></i>Add Other</button></a>
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
                <th>Type</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Image</th>
                <th>File</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($others as $other)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $other->type ?? '' }}</td>
                    <td>{{ $other->title ?? '' }}</td>
                    <td>{{ $other->slug ?? '' }}</td>
                    <td>{{ $other->description ?? '' }}</td>
                    <td>{{ $other->image ?? '' }}</td>
                    <td>{{ $other->file ?? '' }}</td>
                    <td>
                        
                        {{-- <a href="edit/{{ $other->id }}"> --}}
                            <div style="display: flex; flex-direction:row;">
                                {{-- <button type="button" class=" btn-block btn-warning btn-sm"><i class="fas fa-edit"></i>
                                    Edit </button> --}}
                                    <button type="button" class="btn-warning button-size" data-bs-toggle="modal" data-bs-target="#exampleModals">
                                        Update
                                      </button>
                        {{-- </a> --}}
                        
                        
                                <button type="button" class="btn-danger button-size" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Delete
                                  </button>
                        {{-- </a> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>
        @foreach($others as $other)

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/other/destroy/' .$other->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        {{-- for edit --}}
        @foreach($others as $other)

        <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/other/edit/' .$other->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

    </table>


    <script>
        // for delete
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
  
        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
        })

        // for edit
        // var myModal = document.getElementById('myModal')
        // var myInput = document.getElementById('myInput')
  
        // myModal.addEventListener('shown.bs.modal', function () {
        // myInput.focus()
        // })
      </script>
@endsection
