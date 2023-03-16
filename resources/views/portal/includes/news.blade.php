@php

$notices = App\Models\Document::whereType('notice')->latest()->get()->take(15);
// $news = App\Models\Other::whereType('news')->latest()->get()->take(15);

// $data = $notice->concat($news);

@endphp




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



                        </p>
                    </a>

                </div>
                @endforeach





            </div>
        </div>
    </div>
</section>