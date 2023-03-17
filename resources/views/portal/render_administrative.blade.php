@php
   $administrative = App\Models\Message::whereType('administrativehead')->latest()->get()->take(1);
@endphp

@extends('portal.layouts.master')

@section('content')


<section class="latest_blog wid_mar">
    <div class="container">
        <h1 class="sec_title">
            {{ __($page_title) }}
        </h1>
        <div class="row">

            @foreach ($administrative as $ad )
            
            <div class="col-md-6">
                <img src="{{ asset("uploads/message/" . $ad->image) }}" class="chairman_card_image"  alt="..."></a>

            </div>

            <div class="col-md-6">
                {!!ucfirst($ad->description)!!}

            </div>
                
       
      
          

            @endforeach
        </div>
    </div>
</section>

@endsection