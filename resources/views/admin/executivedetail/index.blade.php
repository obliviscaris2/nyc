@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href="{{ route('executive.file') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
                      Import</button></a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->


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

 

      <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sn</th>
                <th>Name</th>
                <th>Image</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Position</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($executivedetails as $ed)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $ed->name ?? '' }}</td>
                    <td>{{ $ed->image ?? '' }}</td>
                    <td>{{ $ed->phone }}</td>
                    <td>{{ $ed->email ?? '' }}</td>
                    <td>{{ $ed->position ?? '' }}</td>
                    <td>
                        
                        {{-- <a href="edit/{{ $ed->id }}"> --}}
                            <div style="display: flex; flex-direction:row;">
                              <button type="button" class="btn-warning button-size" data-bs-toggle="modal" data-bs-target="#exampleModals">
                                Update
                              </button>
                        {{-- </a> --}}
                        
                        {{-- <a href="{{ url('admin/executivedetails/destroy/'.$ed->id) }}"> --}}
                          <button type="button" class="btn-danger button-size" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Delete
                          </button>
                        {{-- </a> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>
{{-- destroy --}}
        @foreach($executivedetails as $ed)

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/executivedetails/destroy/' .$ed->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

        {{-- update --}}

        @foreach($executivedetails as $ed)

        <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('admin/executivedetails/edit/' .$ed->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach
    </table>

    <div class="d-flex justify-content-center">
      {!! $executivedetails->links() !!}
    </div>

    <script>

      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
      })
      </script>

@endsection