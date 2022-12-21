
 <style>
  .lngg{
     position:absolute;
     right:0;
     top: 0%;
}
 </style>
 <div class="lngg"> 
  <select value=" {{ app()->getLocale() == 'ne'? 'Nepali':'English' }}" onChange="top.location.href=this.options[this.selectedIndex].value;" class="selectpicker" data-width="fit">
   
   

    <a href="{{ url(app()->getLocale() == 'en'? 'ne':'en') }}">
      <option value="" data-content={{ app()->getLocale() == 'ne'? 'English':'Nepali' }}'>{{ app()->getLocale() == 'ne'? 'English':'Nepali' }}</option>
    </a>
      {{-- <a href="{{ url('ne') }}">
  
    <option value="{{ url('ne') }}"  data-content='<span class="flag-icon flag-icon-de"></span>'>Nepali</option>
    </a>
       --}}
  </select>
  </div>


  <script>
    $(function(){
    $('.selectpicker').selectpicker();
});
  </script>
 
 {{-- For Header Menu --}}





  <section class="top_nav">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <div class="p-2">
                <img src="{{ url('uploads/' . $sitesetting->main_logo ?? '') }}" class="top_image" alt="logo">
            </div>

            <div class="p-2 text-center">
                <p class="top_ntitle">
                    <span class="title_on">
                        {{ $sitesetting->govn_name }}
                    </span><br>
                    <span class="title_tw">
                        {{ $sitesetting->ministry_name }}
                    </span><br>
                    <span class="title_th">
                        {{ $sitesetting->department_name }}
                    </span><br>
                    <span class="title_fo">
                        {{ $sitesetting->office_name }}
                    </span><br>

                    <span class="title_fi">
                        {{ $sitesetting->office_address }}
                    </span>

                </p>
            </div>

            <div class="p-2">
                <img src="{{ url('uploads/' . $sitesetting->side_logo ?? '') }}" class="top_image" alt="logo">
            </div>
        </div>

    </div>
</section>




 <section class="navigation">
    <div class="nav-container">
    
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        
        <ul class="nav-list">
            <li><a href="{{ url('/') }}">गृहपृष्ठ</a></li>
            <li><a href="#">हाम्रो बारेमा</a>
              <ul class="nav-dropdown">
                <li><a href="{{ route('render_about') }}">कार्यालयकाे परिचय</a></li>
                <li><a href="{{ route('render_team') }}">कर्मचारी विवरण</a></li>
                <li><a href="{{ route('render_committee') }}">जिल्ला समितीहरु</a></li>
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
              {{-- <form action="{{ url('/') }}">
                  <input type="text" name="find" placeholder="Search">
             </form> --}}
     
            </li>
          </ul>
  
      </nav>
    </div>
  </section>
 
