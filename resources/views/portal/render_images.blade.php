@extends('portal.layouts.master')

@section('content')



<section class="u-align-center u-clearfix u-palette-5-light-3 u-section-6" id="carousel_f852">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <h1 class="sec_title">{{ __("Photo Gallery") }}</h1>
        </h3>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <div class="u-gallery-inner u-gallery-inner-1">
                @foreach ($images as $img)
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" data-image-width="513" data-image-height="300">
                            <img class="u-back-image u-expanded u-back-image-1"
                                src="{{ asset('uploads/image/' . $img->img) }}">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                            <h3 class="u-gallery-heading">{{ $img->img_desc }}</h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div>
                @endforeach

             
            </div>
        </div>
    </div>
</section>
    {{-- <div class="container">

        <div class="row mt-3">
            <h1 class="sec_title">{{ __("Photo Gallery") }}</h1>
           
        @foreach ($images as $image)
            <div class="col-md-3">
                <div class="image_card mt-2 mb-2" >
                    <a class="venobox" data-gall="myGallery" href="{{ url('uploads/image/' . $image->img) }}"><img class="image" src="{{ url('uploads/image/' . $image->img) }}" alt="image alt"/></a>
                    
                    <div class="card-body">
                    <p>
                        <span class="image_desc">{{ $image->img_desc }}</span><br>
                       
                    </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div> --}}

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



<<<<<<< HEAD
    {{-- </div> --}}
=======
    </div>
>>>>>>> b7741def0c905f8598fbb216231ec228e89b24a5

@endsection
