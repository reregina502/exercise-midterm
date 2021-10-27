@extends('layout.master')

@section('title', 'content')

@section('content')
<body>
    <div class="container mt-3">
        <div class="blog-post">
    @forelse ($posts as $post )
    <h2 class="blog-post-title">{{$post->Title}}</h2>
    <p class="blog-post-meta">{{$post->posted_at}}</p>
    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 1200px; height: 750px;" src="{{$post->image}}" data-holder-rendered="true">

    <p>{!! $post->content !!}</p>
</div>
  </div>
  @empty
  @endforelse
</body>
@endsection
