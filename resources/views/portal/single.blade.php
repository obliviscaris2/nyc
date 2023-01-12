
@extends('portal.layouts.master')


<?php $root =url('')

@section('content')

    <div class="container">
        <h1>
            {{ $post->title}}
        </h1>

        @if (!empty($category))
            
        
        {{ $category->title }}

        @endif
        

        {{date('F jS,Y', strtotime($post->created_at)) }}

        <img src="{{ asset("uploads/posts/image/" . $post->image) }}" class="card-img-top" alt="...">

      <?=str_replace('src="','src="'.$root.'/',$post->content)?>

      {{-- {!! $row->content !!} --}}


        
    </div>







@endsection