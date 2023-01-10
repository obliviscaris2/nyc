@php
   $executivedetail = App\Models\ExecutiveDetail::all();
@endphp

@extends('portal.layouts.master')

@section('content')
    <div class="container">

        <div class="row mt-3">
            <h1 class="sec_title">{{ __("Council Members") }}</h1>
           
        @foreach ($executivedetail as $ex)
            <div class="col-md-4">
                <div class="card team_card mt-2 mb-2">
                    <img src="{{ asset($ex->image) }}" class="card-img-top image">
                    <div class="card-body">
                    <p>
                        <span class="exe_name">{{ $ex->name }}</span><br>
                        <span class="exe_position">{{ $ex->post }}</span><br>
                        <span class="exe_email">{{ $ex->email }}</span><br>
                        <span class="exe_contact">{{ $ex->phone }}</span>
                    </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>




    </div>

    

@endsection