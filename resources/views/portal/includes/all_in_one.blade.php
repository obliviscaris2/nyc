
@php

$notice = App\Models\Document::whereType('notice')->latest()->get()->take(4);
$publication = App\Models\Document::whereType('publication')->latest()->get()->take(4);
$tender = App\Models\Document::whereType('tender')->latest()->get()->take(4);
$rules = App\Models\Information::whereType('policy')->latest()->get()->take(4);
$directot = App\Models\Information::whereType('directive')->latest()->get()->take(4);
$press = App\Models\Information::whereType('pressrelease')->latest()->get()->take(4);
$news = App\Models\Other::whereType('news')->latest()->get()->take(4);
$other = App\Models\Other::whereType('other')->latest()->get()->take(4);

@endphp


    {{-- For ALl in One --}}

    <section class="all_in_one wid_mar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 allbox_one">
                    <div class="card">

                        <div class="card-head">
                            <h5 class="card-title">
                                <span class="card-title-backg">{{ __("Documents") }}</span>
                            </h5>
                        </div>


                        
                        <div class="tab">
                            <button class="tablinks" onclick="notes(event, 'Notice')">{{ __("Notice") }}</button>
                            <button class="tablinks" onclick="notes(event, 'Publication')">{{ __("Publication") }}</button>
                            <button class="tablinks" onclick="notes(event, 'Tender')">{{ __("Tender") }}</button>
                          </div>
                          
                          <div id="Notice" class="tabcontent">
                            <ul class="events_text">
                            @foreach ($notice as $notice ) 
                                <li>
                                    <a href="{{ route('render_otherpost', $notice->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $notice->title }} </a>
                                   <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                   <hr>
                                    {{-- <img class="show_image" src=""> --}}
                                </li>
                                @endforeach
                            </ul>
                          </div>
                          
                          <div id="Publication" class="tabcontent">
                            <ul class="events_text">
                                @foreach ($publication as $publication )
                                <li><a href="{{ route('render_otherpost', $publication->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $publication->title }}
                                    </a>
                                    <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                    <hr>
                                    {{-- <img class="show_image" src=""> --}}

                                </li>
                                @endforeach
                            </ul>
                          </div>
                          
                          <div id="Tender" class="tabcontent">
                            <ul class="events_text">
                                @foreach ($tender as $tender )
                                <li><a href="{{ route('render_otherpost', $tender->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $tender->title }}
                                    </a>
                                    <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                    <hr>
                                    {{-- <img class="show_image" src=""> --}}

                                </li>
                                @endforeach
                            </ul>
                          </div>
                          
                        
                    </div>
                </div>

                <div class="col-md-4 allbox_two">
                    <div class="card">
                        <div class="card-head">
                            <h5 class="card-title">{{ __("Information") }}</h5>
                        </div>


                        <div class="tab">
                            <button class="tablinksone" onclick="info(event, 'Rules')">{{ __("Regulations") }}</button>
                            <button class="tablinksone" onclick="info(event, 'Directot')">{{ __("Directory") }}</button>
                            <button class="tablinksone" onclick="info(event, 'Press')">{{ __("Press Release") }}</button>
                          </div>
                          
                          <div id="Rules" class="tabcontentone">
                            <ul class="events_text">
                                @foreach ($rules as $rule ) 
                                <li><a href="{{ route('render_info', $rule->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $rule->title }} </a>
                                    <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                    <hr>
                                    {{-- <img class="show_image" src=""> --}}
                                </li>
                                @endforeach
                            </ul>


                          </div>
                          
                          <div id="Directot" class="tabcontentone">
                            <ul class="events_text">
                                @foreach ($directot as $directot )
                                <li><a href="{{ route('render_info', $directot->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $directot->title }}
                                    </a>
                                    <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                    <hr>
                                    {{-- <img class="show_image" src=""> --}}

                                </li>
                                @endforeach
                            </ul>

                          </div>
                          
                          <div id="Press" class="tabcontentone">
                            <ul class="events_text">
                                @foreach ($press as $press )
                                <li>
                                    <a href="{{ route('render_info', $press->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $press->title }}</a>
                                    <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                    <hr>
                                    {{-- <img class="show_image" src=""> --}}

                                </li>
                                @endforeach
                            </ul>
                          </div>
                          
                        

                    </div>
                </div>

                <div class="col-md-4 allbox_three">
                    <div class="card">



                        <div class="card-head">
                            <h5 class="card-title">{{ __("Downloads") }}</h5>
                        </div>
                        <div class="tab">
                            <button class="tablinkstwo" onclick="other(event, 'News')">{{ __("News") }}</button>
                            <button class="tablinkstwo" onclick="other(event, 'Other')">{{ __("Others") }}</button>
                          </div>
                          
                          <div id="News" class="tabcontenttwo">
                            <ul class="events_text">
                                @foreach ($news as $news )
                                <li><a href="{{ route('render_other_post', $news->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $news->title }}
                                    </a>
                                    <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                    <hr>
                                    {{-- <img class="show_image" src=""> --}}

                                </li>
                                @endforeach
                            </ul>
                          </div>
                          
                          <div id="Other" class="tabcontenttwo">
                            <ul class="events_text">
                                @foreach ($other as $other )
                                <li><a href="{{ route('render_other_post', $other->slug)}}"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $other->title }}
                                    </a>
                                    <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($notice->created_at)) }}</p> 
                                    <hr>
                                    {{-- <img class="show_image" src=""> --}}

                                </li>
                                @endforeach
                            </ul>
                          </div>
                          
                         
                    

                    </div>
                </div>



            </div>
        </div>
    </section>

    <script>

        function notes(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
      
        function info(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontentone");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinksone");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }






        function other(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontenttwo");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinkstwo");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        </script>
  

