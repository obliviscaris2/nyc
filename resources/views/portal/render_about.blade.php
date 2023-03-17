@extends('portal.layouts.master')

@section('content')
    <div class="container">
        <div class="row m-3">
            <h3 class="sec_title">{{ !empty($abouts->title) ? $abouts->title:'' }}</h3>

            <div class="col-md-6 about" data-animation-name="customAnimationIn" data-animation-duration="1500"
            data-animation-delay="500">

                <img src="{{ asset('uploads/about/' . $abouts->image) }}" class="image" alt="cover-image">

            </div>
            <div class="col-md-6"  data-animation-name="customAnimationIn" data-animation-duration="1500"
            data-animation-delay="0">
                <p class="para"><?=$abouts->content?></p>

            </div>

            {{-- <div class="col-md-3">
                @include('portal.includes.staff_detail')
            </div> --}}

        </div>

    </div>
@endsection
 