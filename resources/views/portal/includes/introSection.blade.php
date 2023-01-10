
    {{-- For About Us --}}
@php
     $abouts = App\Models\About::first();
@endphp
  

    

<section class="about_us">
   
      <div class="container aboutuscontainer">
          <div class="row">
              <p class="sec_utitle">{{ !empty($abouts->title) ? $abouts->title:'' }}</p>
              <div class="col-md-7 about_ucontent">


                  <p class="us_content">
                    {!! Str::words(strip_tags($abouts->content), 150) !!}
                  </p>
                  <a class="about_aclass" href="{{ route('render_about') }}">{{ __("Read more") }} <i class="fa-solid fa-arrow-right"></i>
                  </a>

              </div>

              <div class="col-md-5">
                  <div class="about_uimage">
                      <img src="{{ asset('uploads/'.$abouts->image) }}">
                  </div>
              </div>
          </div>
      </div>
      <div class = "fb_container">
        <h1>kdennedk</h1>
      
    </div>
</section>



