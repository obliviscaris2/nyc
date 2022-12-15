@php
     $teams = App\Models\Team::first()->get()->take(3);
@endphp

 

@foreach ($teams as $team )
    

<div class="right_intro card card_one">

    <div class="card-head">
        <h5 class="card-title">{{ $team->role }}</h5>
    </div>
    <div class="row pp_desc">
        <div class="col-md-5  col-5 col-sm-5">

            <img src="{{ asset('uploads/' . $team->image ?? '') }}">
        </div>
        <div class="col-md-7  col-7 col-sm-7">
            <p><span class="bold_name">{{ $team->name }}</span><br>
               {{$team->position}} <br>
               {{$team->contact_number}}

                <!-- वरिष्ठ जलाधार व्यवस्थापन अधिकृत<br> -->

                <span class="eng">{{ $team->email }}</span>
            </p>
        </div>
    </div>

</div>

@endforeach
