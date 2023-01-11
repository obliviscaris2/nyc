@extends('portal.layouts.master')

@section('content')
    <div class="container">

        <div class="row mt-3">
            <h1 class="sec_title">{{ $otherpost->title }}</h1>
          
           
           <div class="col-md-12">
                <iframe src="{{ asset('uploads/documents/file/' . $otherpost->file) }}" width="100%" height="500px">
                </iframe>
               <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($otherpost->created_at)) }}</p> 
               <hr>
                {{-- <img class="show_image" src=""> --}}
            </div>
           

        </div>
        


    </div>



@endsection
