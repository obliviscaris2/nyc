  {{-- For Header Menu --}}


  <section class="top_nav">
    <div class="container">
      @if(count(config('app.languages')) > 1)
                  
      <a class="">
          {{ strtoupper(app()->getLocale()) }}
      </a>
      <div>
        @foreach(config('app.languages') as $langLocale => $langName)
        <a class="" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} </a>
        @endforeach
      </div>

      @endif

        <div class="d-flex justify-content-between align-items-center">
            <div class="p-2">
                <img src="{{ url('uploads/' . $sitesetting->main_logo ?? '') }}" class="top_image" alt="logo">
            </div>

            <div class="p-2 text-center">
                <p class="top_ntitle">
                    <span class="title_on">
                        {{ __($sitesetting->govn_name) }}
                    </span><br>
                    <span class="title_tw">
                        {{ __($sitesetting->ministry_name) }}
                    </span><br>
                    <span class="title_th">
                        {{ __($sitesetting->department_name) }}
                    </span><br>
                    <span class="title_fo">
                        {{ __($sitesetting->office_name) }}
                    </span><br>

                    <span class="title_fi">
                        {{ __($sitesetting->office_address) }}
                    </span>

                </p>
            </div>

            <div class="p-2">
                <img src="{{ url('uploads/' . $sitesetting->side_logo ?? '') }}" class="top_image" alt="logo">
            </div>
        </div>

    </div>
</section>
{{-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">गृहपृष्ठ</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        हाम्रो बारेमा

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    
                            <li><a class="dropdown-item"
                                    href="#">Something</a></li>
                    

                    </ul>
                </li>
              

                @foreach ($categories as $category )
                    
               
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ $category->category }}</a>
                </li>

                @endforeach
                <li class="nav-item">
                    <form action="{{ url('/') }}">
                        <input type="text" name="find" placeholder="Search">
                    </form>
                </li>

            
            </ul>
          
        </div>
    </div>
</nav> --}}
{{-- 

<section class="navigation">
    <div class="nav-container">
     
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#"><span></span></a>
        </div>
        <ul class="nav-list mx-auto">
          <li><a href="{{ url('/') }}">गृहपृष्ठ</a></li>
          <li><a href="#">हाम्रो बारेमा</a>
            <ul class="nav-dropdown">
              <li><a href="{{ route('render_about') }}">कार्यालयकाे परिचय</a></li>
              <li><a href="{{ route('render_team') }}">कर्मचारी विवरण</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </li>
          <li><a href="#">दस्तावेज</a>
            <ul class="nav-dropdown">
                <li><a href="{{ route('render_notice') }}">सुचना</a></li>
                <li><a href="{{ route('render_publication') }}">प्रकाशन</a></li>
                <li><a href="{{ route('render_tender') }}">बाेलपत्र</a></li>
              
            </ul>
          </li>
          <li><a href="#">जानकारी</a>
            <ul class="nav-dropdown">
                <li><a href="{{ route('render_rules') }}">ऐन तथा नियमावली</a></li>
                <li><a href="{{ route('render_directot') }}">निर्देशिका</a></li>
                <li><a href="{{ route('render_press') }}">प्रेस विज्ञप्ति</a></li>    
            </ul>
          </li>
          <li><a href="#">अन्य डाउनलाेड</a>
            <ul class="nav-dropdown">
                <li><a href="{{ route('render_news') }}">समाचार</a></li>
                <li><a href="{{ route('render_other') }}">अन्य</a></li>
             
            </ul>
          </li>
          <li><a href="#">ग्यालेरी</a>
            <ul class="nav-dropdown">
              <li><a href="{{ route('render_images') }}">फाेटाे ग्यालेरी</a></li>
              <li><a href="{{ route('render_videos') }}">भिडियाे ग्यालेरी</a></li>
            </ul>
          </li>
         
         
          <li><a href="{{ route('contact_page') }}">सम्पर्क</a></li>
          <li>
            <form action="{{ url('/') }}">
                <input type="text" name="find" placeholder="Search">
           </form>
   
          </li>
        </ul>

        
        
      </nav>
    </div>
  </section>
 --}}



 <section class="navigation">
    <div class="nav-container">
    
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        
        <ul class="nav-list">
            <li><a href="{{ url('/') }}">{{ __("Home") }}</a></li>
            <li><a href="#">{{ __("About Us") }}</a>
              <ul class="nav-dropdown">
                <li><a href="{{ route('render_about') }}">{{ __("Introduction") }}</a></li>
                <li><a href="{{ route('render_team') }}">{{ __("Employee Details") }}</a></li>
                <li><a href="{{ route('render_committee') }}">{{ __("District Committees") }}</a></li>
                <li><a href="{{ route('render_executive_members') }}">{{ __("Council Members") }}</a></li>
                <li><a href="{{ route('render_administrative') }}">{{ __("Message from the Administrative Head") }}</a></li>
                <li><a href="{{ route('render_chairperson') }}">{{ __("Message from Chairperson") }}</a></li>
              </ul>
            </li>
            <li><a href="#">{{ __("Documents") }}</a>
              <ul class="nav-dropdown">
                  <li><a href="{{ route('render_notice') }}">{{ __("Notice") }}</a></li>
                  <li><a href="{{ route('render_publication') }}">{{ __("Publication") }}</a></li>
                  <li><a href="{{ route('render_tender') }}">{{ __("Tender") }}</a></li>
                
              </ul>
            </li>
            <li><a href="#">{{ __("Information") }}</a>
              <ul class="nav-dropdown">
                  <li><a href="{{ route('render_rules') }}">{{ __("Acts & Regulations") }}</a></li>
                  <li><a href="{{ route('render_directot') }}">{{ __("Directory") }}</a></li>
                  <li><a href="{{ route('render_press') }}">{{ __("Press Release") }}</a></li> 
              </ul>
            </li>
            <li><a href="#">{{ __("Downloads") }}</a>
              <ul class="nav-dropdown">
                  <li><a href="{{ route('render_news') }}">{{ __("News") }}</a></li>
                  <li><a href="{{ route('render_other') }}">{{__("Others") }}</a></li>
               
              </ul>
            </li>
            <li><a href="#">{{ __("Gallery") }}</a>
              <ul class="nav-dropdown">
                <li><a href="{{ route('render_images') }}">{{ __("Photo Gallery") }}</a></li>
                <li><a href="{{ route('render_videos') }}">{{ __("Video Gallery") }}</a></li>
              </ul>
            </li>
           
           
            <li><a href="{{ route('contact_page') }}">{{ __("Contact") }}</a></li>
            <li>
              {{-- <form action="{{ url('/') }}">
                  <input type="text" name="find" placeholder="Search">
             </form> --}}
     
            </li>
            

  
          </ul>

          
  
      </nav>
    </div>
  </section>
  