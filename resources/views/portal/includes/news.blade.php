@php
    
    $notice = App\Models\Document::whereType('notice')->latest()->get()->take(5);
    $news = App\Models\Other::whereType('news')->latest()->get()->take(5);

    $data = $notice->concat($news);

@endphp
   
   
   
   
   {{-- For Quick News --}}
    <section class="quick_news">
        <div class="container">
            <div class="news_slider columns">


                <button class="qn_button">
                    {{ __("Highlights") }}
                </button>
                <div class="news_track">

                    @foreach ($data as $data )
                        
                  
                    <div class="news_slide">
                        {{-- <a href="{{ route('render_otherpost', $data->slug)}}"> --}}
  
                            <p>
                                        {{ $data->title }}
                                
                            </p>
                        {{-- </a> --}}
                       
                    </div>
                    @endforeach
                 

                  

                  
                </div>
            </div>
        </div>
    </section>
