@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    <a href="{{ route('admin.team.create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
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
          <td><img src="{{ asset('uploads/team/' . $team->image) ?? '' }}" id="preview"
              style="max-width: 100px; max-height:100px; object-fit: cover" /></td>
          <td>{{ $team->contact_number ?? '' }}</td>
          <td>{{ $team->email ?? '' }}</td>
          <td>
            {{-- <a href="/admin/team/edit/{{ $team->id }}"> --}}
              <div style="display: flex; flex-direction:row;">
                <button type="button" class="btn-block btn-warning button-size" data-bs-toggle="modal" data-bs-target="#exampleModals">
                  Update
                </button>
            {{-- </a> --}}
            {{-- <a href="{{ url('admin/team/delete/'.$team->id) }}"> --}}
              <button type="button" class="btn-block btn-danger button-size" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
              </button>
            {{-- </a> --}}
          </td>
        </tr>
        @endforeach
      </tbody>

      @foreach($teams as $team)
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
      
              <div class="modal-footer">
                <a href=""><button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button></a>
                <a href="{{ url('admin/team/delete/'.$team->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

      @endforeach

      {{-- update --}}

      @foreach($teams as $team)
      <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
      
              <div class="modal-footer">
                <a href=""><button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button></a>
                <a href="{{ url('admin/team/edit/'.$team->id) }}">
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
      {!! $teams->links() !!}
    </div>
    


    @if (isset($links) && is_array($links))


    <div class="p-4">

      @foreach ($links as $link )

      <a href="{{ $link[1] }}">
        <button class="btn btn-primary">{{ $link[0] }}</button>
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
        <script>

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
myInput.focus()
})
</script>
</script>





@stop