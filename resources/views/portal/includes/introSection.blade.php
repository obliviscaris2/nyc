

  

    
@foreach ($abouts as $about )
    

    <section class="about_us wid_mar">
      <div class="container">
          <div class="row">
              <p class="about_utitle">{{ !empty($about->title) ? $about->title:'' }}</p>
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
  </section>

  @endforeach

