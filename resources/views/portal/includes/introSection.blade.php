

@foreach ($abouts as $about )
    

<section class="about_us">
   
      <div class="container aboutuscontainer">
          <div class="row">
              <p class="sec_title">{{ !empty($about->title) ? $about->title:'' }}</p>
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
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnationalyouthcouncilnepal&tabs=timeline&width=300px&height=500px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300px" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      
    </div>
</section>

  @endforeach

