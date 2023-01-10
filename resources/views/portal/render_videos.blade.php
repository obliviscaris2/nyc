@extends('portal.layouts.master')

@section('content')
    <div class="container">

        <div class="row mt-3">
            <h1 class="sec_title">{{ __("Video Gallery") }}</h1>
           
        @foreach ($videos as $video)
            <div class="col-md-4">
                <div class="card video_card mt-2 mb-2">
                    <iframe src="{{ $video->vid_url }}" title="{{ $video->vid_desc }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                    <p>
                        <span class="vid_desc">{{ $video->vid_desc }}</span><br>
                       
                    </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>




    </div>

    @include('portal.includes.all_in_one')

@endsection
