

    {{-- For Latest Blogs --}}
    <section class="latest_blog wid_mar">
        <div class="container">
            <h1 class="sec_title">
                {{ __("Blog") }}
            </h1>
            <div class="row">

                @foreach ($posts as $post )
                    
           
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{url('single/'.$post->slug)}}"><img src="{{ asset("uploads/posts/image/" . $post->image) }}" class="card-img-top" alt="..."></a>
                        <div class="d-flex ">

                            <div class="p-2 flex-shrink-1 blog_date">
                                <p>{{date('F jS,Y', strtotime($post->created_at)) }}</p>
                            </div>
                            <div class="p-2 w-100 blog_title">
                                <p>
                                   {{ucfirst($post->title)}}
                                </p>
                          
                            </div>
                        </div>

                    </div>
                </div>
              

                @endforeach
            </div>
        </div>
    </section>




