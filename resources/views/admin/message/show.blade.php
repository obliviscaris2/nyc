@extends('admin.master')


@section('content')
    <a href="{{ url('admin/message/index/') }}">
        <button type="button" class="btn-block btn-success btn-sm" data-toggle="modal"
        data-target="#modal-default" style="width:auto;" onclick="replaceLinkFunction">
            Back
        </button>
    </a>
    <br>
    <br>
    <section class="content">
        <div class="container-fluid">
            
            <form id="quickForm" method="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $message->id }}">
                <div class="form-group">
                    <label for="name">Position:</label>
                    <br>

                    <label for="name">{{ $message->type }}</label>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <br>
                    <label for="name">{{ $message->name }}</label>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <br>
                    <label for="description">{!! $message->description !!}</label>
                </div>
            </form>
        </div>
    </section>
@endsection
