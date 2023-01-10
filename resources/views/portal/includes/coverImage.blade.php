
@php
<<<<<<< HEAD
$img = App\Models\CoverImage::first();
$images = App\Models\CoverImage::get()->skip(1);
=======
$images = App\Models\CoverImage::get()->skip(1);
$img = App\Models\CoverImage::first();
>>>>>>> 487009eca607b34cf2cf4e13a492f6ebfdd3d327
@endphp


    
    {{-- For Cover Image --}}
    <section class="cover_page wid_mar">
      <div class="container">
          <div class="row">
              <div class="col-md-9 cover_slider">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                      <div class="carousel-inner">

<<<<<<< HEAD
                          <div class="carousel-item active">
                              <img src="{{ asset('uploads/coverimage/' . $img->image) }}" class="d-block" alt="...">
                          </div>
=======
                        <div class="carousel-item active">
                            <img src="{{ asset('uploads/coverimage/' . $img->image) }}" class="d-block" alt="...">
                        </div>
                          @foreach ($images as $image )
                              
                            <div class="carousel-item">
                                <img src="{{ asset('uploads/coverimage/' . $image->image) }}" class="d-block" alt="...">
                            </div>
                          
>>>>>>> 487009eca607b34cf2cf4e13a492f6ebfdd3d327

                          @foreach ($images as $image )
                          <div class="carousel-item ">
                            <img src="{{ asset('uploads/coverimage/' . $image->image) }}" class="d-block" alt="...">
                        </div>
                        @endforeach
                        
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
<<<<<<< HEAD
                     
=======

>>>>>>> 487009eca607b34cf2cf4e13a492f6ebfdd3d327
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                  </div>
              </div>

              <div class="col-md-3">
                 
                @include('portal.includes.staff_detail')
                  {{-- <div class="team_cover">

                  </div> --}}
              </div>
          </div>
      </div>
  </section>


  