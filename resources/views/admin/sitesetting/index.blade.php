@extends('admin.layouts.master')

@section('content')

    @if (session('successMessage'))
        <div class="alert alert-success">
            {!! session('successMessage') !!}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sitesetting</h1>
                    {{-- <a href="{{ url('admin/sitesetting/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Sitesetting</button></a>  --}}
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
      <th>Office Name</th>
      <th>Office Email</th>
      <th>Office Contact</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($sitesettings as $sitesetting)
    <tr data-widget="expandable-table" aria-expanded="false">
      <td>{{ $sitesetting->office_name ?? '' }}</td>
      <td>{{ $sitesetting->office_mail ?? '' }}</td>
      <td>{{ $sitesetting->office_contact ?? '' }}</td>

      <td>
        {{-- <a href="/admin/sitesetting/edit/{{ $sitesetting->id }}">
          <div style="display: flex; flex-direction:row;">
            <button type="button" class="btn btn-block btn-warning btn-sm"><i class="fas fa-edit"></i> Update </button>
        </a> --}}
        <div style="display: flex; flex-direction:row;">
          {{-- <button type="button" class="btn-block btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
            Update
          </button> --}}
          <button type="button" class="btn-warning button-size" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Update
          </button>
        </div>
          
          {{-- </a> --}}
      </td>
    </tr>
    @endforeach
  </tbody>
  @foreach($sitesettings as $sitesetting)
  {{-- modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
           <a href="{{ url('admin/sitesetting/edit/' .$sitesetting->id) }}">
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