@extends('portal.layouts.master')

@section('content')
    <div class="container">

        <div class="row mt-3">
            <h1 class="sec_title">{{ __("Photo Gallery") }}</h1>
           
        @foreach ($images as $image)
            <div class="col-md-3">
                <div class="image_card mt-2 mb-2">
                    <a class="venobox" data-gall="myGallery" href="{{ url('uploads/' . $image->img) }}"><img class="image" src="{{ url('uploads/' . $image->img) }}" alt="image alt"/></a>
                    
                    {{-- <img src="{{ asset('uploads/' . $image->img) }}" class="card-img-top image"> --}}
                    <div class="card-body">
                    <p>
                        <span class="image_desc">{{ $image->img_desc }}</span><br>
                       
                    </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>

        <script>
            $(document).ready(function() {
                var test = $('.venobox').venobox();
            });
            // close current item clicking on .closeme
            $(document).on('click', '.closeme', function(e) {
                test.VBclose();
            });
        
            // go to next item in gallery clicking on .next
            $(document).on('click', '.next', function(e) {
                test.VBnext();
            });
        
            // go to previous item in gallery clicking on .previous
            $(document).on('click', '.previous', function(e) {
                test.VBprev();
            });
        </script>



    </div>

    @include('portal.includes.land_contact')
  

    

@endsection
