




    <!-- For Gallery -->
    <section class="gallery_slider wid_mar">
        <div class="container">
            <h1 class="sec_title">
                {{ __("Photo Gallery") }}
            </h1>
            <div class="slider">
                <div class="row">
                    @foreach ($images as $image )
                    <div class="slide">
                        
                       <a href="{{ route('render_images') }}"><img src="{{ asset('uploads/' . $image->img ?? '') }}" alt="" /></a> 
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>



    {{-- For Videos Section --}}
<section class="videos wid_mar">
    <div class="container">
        <h1 class="sec_title">
            {{ __("Video Gallery") }}
        </h1>
        <div class="row">
            @foreach ($videos as $video )

            <div class="col-md-4 videos_one">
                <iframe src="{{ $video->vid_url }}" title="{{ $video->vid_desc }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                
            @endforeach
          
        </div>
    </div>
</section>

