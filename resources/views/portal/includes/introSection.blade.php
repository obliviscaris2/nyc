
    {{-- For About Us --}}
@php
     $abouts = App\Models\About::first();
@endphp
  

    

    <section class="about_us wid_mar">
      <div class="container">
          <div class="row">
              <p class="about_utitle">{{ !empty($abouts->title) ? $abouts->title:'' }}</p>
              <div class="col-md-7 about_ucontent">


                  <p class="us_content">
                    {!! Str::words(strip_tags($abouts->content), 150) !!}
                  </p>
                  <a class="about_aclass" href="{{ route('render_about') }}">पुरा पढ्नुहाेस <i class="fa-solid fa-arrow-right"></i>
                  </a>

              </div>

              <div class="col-md-5">
                  <div class="about_uimage">
                      <img src="{{ asset('uploads/'.$abouts->image) }}">
                  </div>
              </div>
          </div>
      </div>
  </section>



