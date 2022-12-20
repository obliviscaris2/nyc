@php
   $chairperson = App\Models\Message::whereType('chairperson')->latest()->get()->take(1);
@endphp

@extends('portal.layouts.master')

@section('content')


<section class="latest_blog wid_mar">
    <div class="container">
        <h1 class="sec_title">
            {{ $page_title }}
        </h1>
        <div class="row">

            @foreach ($chairperson as $ad )
            
                
       
            <div class="">
                <div class="card">
                    <img src="{{ asset("uploads/message/image/" . $ad->image) }}" class="card-img-top" alt="..."></a>
                    <div class="d-flex ">

                        <div class="p-2 w-100 blog_title">
                            <p>
                               {{ucfirst($ad->name)}}
                            </p>
                      
                        </div>
                        <div class="p-2 w-100 blog_title">
                            <p>
                               {!!ucfirst($ad->description)!!}
                            </p>
                      
                        </div>
                    </div>

                </div>
            </div>
          

            @endforeach
        </div>
    </div>
</section>

@endsection