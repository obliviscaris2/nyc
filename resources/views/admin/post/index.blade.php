@extends('admin.master')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    {{-- {{ url('admin/otherpost/create') }} --}}
                    <a href="{{ route('admin.posts.create') }}"><button class="btn-primary btn-sm"><i
                                class="fa fa-plus"></i>Add Post</button></a>
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
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Content</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $post->title ?? '' }}</td>
                    @foreach ($post->get_categories as $category )
                    <td>{{  $category->title  }}</td>   
                    @endforeach
                    <td>{{ $post->image ?? '' }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        
                        {{-- <a href="edit/{{ $post->id }}">
                            <div style="display: flex; flex-direction:row;">
                                <button type="button" class="btn-block btn-warning btn-sm"><i class="fas fa-edit"></i>
                                    Edit </button>
                        </a>
                        
                        <a href="{{ url('admin/documents/destroy/'.$post->id) }}">
                            <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                data-target="#modal-default" style="width:auto;"
                                onclick="replaceLinkFunction">Delete</button>
                        </a> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
