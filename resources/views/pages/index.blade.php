@extends('layouts.app')

@section('content')

<section id="bricks">

    <div class="row masonry">
        <!-- brick-wrapper -->
      <div class="bricks-wrapper">

          <div class="grid-sizer"></div>
      
            @if(count($posts) > 0)
                @foreach($posts as $post)
                <article class="brick entry animate-this" >

                    <div class="entry-thumb">
                       <a href="single-standard.html" class="thumb-link">
                           <img src="{{$post->image}}" alt="{{$post->title}}">                      
                       </a>
                    </div>
                    <div class="entry-text">
                        <div class="entry-header">
                            <div class="entry-meta">
                                <span class="cat-links">
                                    <a href="#">{{$post->categoryname}}</a>               				
                                </span>			
                            </div>
                        <h1 class="entry-title"><a href="single-standard.html">{{$post->title}}</a></h1>
                        </div>
                    <div class="entry-excerpt">{{$post->description}}</div>
                    </div>
                </article>
                @endforeach
            @else
                <p>No Post Found</p>
            @endif
      </div> <!-- end brick-wrapper --> 
    </div> <!-- end row -->
    <!--div class="row">
        Pagination here
    </div-->

</section>

@endsection