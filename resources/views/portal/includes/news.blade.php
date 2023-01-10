@php
<<<<<<< HEAD
=======
    
    $notice = App\Models\Document::whereType('notice')->latest()->get()->take(5);
    $news = App\Models\Other::whereType('news')->latest()->get()->take(5);
>>>>>>> 487009eca607b34cf2cf4e13a492f6ebfdd3d327

$notices = App\Models\Document::whereType('notice')->latest()->get()->take(15);
// $news = App\Models\Other::whereType('news')->latest()->get()->take(15);

// $data = $notice->concat($news);

@endphp


<<<<<<< HEAD


{{-- For Quick News --}}
<section class="quick_news">
    <div class="container">
        <div class="news_slider columns">


            <button class="qn_button">
                {{ __('Highlights') }}
            </button>
            <div class="news_track">

                @foreach ($notices as $notice )


                <div class="news_slide">
                    <a href="{{ route('render_otherpost_news', $notice->id)}}">

                        <p>
                            {{ $notice->title }}
=======
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
                 
>>>>>>> 487009eca607b34cf2cf4e13a492f6ebfdd3d327



                        </p>
                    </a>

                </div>
                @endforeach





            </div>
        </div>
    </div>
</section>