@extends('portal.layouts.master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-9 about">


                <h3 class="sec_title">{{ !empty($abouts->title) ? $abouts->title:'' }}</h3>

                <img src="{{ asset('uploads/' . $abouts->image) }}" class="image" alt="cover-image">

                <p class="para"><?=$abouts->content?></p>
            </div>

            <div class="col-md-3">
                @include('portal.includes.staff_detail')
            </div>

        </div>

    </div>
@endsection
 