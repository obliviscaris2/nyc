

  

    
@foreach ($abouts as $about )
    

<section class="about_us">
   
      <div class="container aboutuscontainer">
          <div class="row">
<<<<<<< HEAD
              <p class="sec_utitle">{{ !empty($abouts->title) ? $abouts->title:'' }}</p>
=======
              <p class="about_utitle">{{ !empty($about->title) ? $about->title:'' }}</p>
>>>>>>> 487009eca607b34cf2cf4e13a492f6ebfdd3d327
              <div class="col-md-7 about_ucontent">


                  <p class="us_content">

                    {!! Str::words(strip_tags($about->content), 150) !!}
                  </p>
                  <a class="about_aclass" href="{{ route('render_about') }}">{{ __("Read more") }} <i class="fa-solid fa-arrow-right"></i>
                  </a>

              </div>

              <div class="col-md-5">
                  <div class="about_uimage">
                      <img src="{{ asset('uploads/'.$about->image) }}">
                  </div>
              </div>
          </div>
      </div>
      <div class = "fb_container">
        <h1>kdennedk</h1>
      
    </div>
</section>

  @endforeach

