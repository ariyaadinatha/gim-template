@extends('template.main')

@section('title')
{{ $post->title }}
@endsection

@section('content')
<div class="container mt-4">
    <div class='post-title'>
        <h1>{{$post->title}}</h1>
    </div>


    <div class='post-navigation-top'>
        <a href="/posts">
            &larr; BACK TO POST
        </a>
    </div>
    {!! $post->body !!}

    <p>Updated At: {{$post->updated_at}} WIB</p>
</div>

@endsection

@section('script')
<script>
//     document.querySelector(".post-bg").style.background = " linear-gradient(360deg, #000000 5%, rgba(50, 23, 64, 0.3) 75%), url({{$post->imgurl}}) no-repeat center center";
//     document.querySelector(".post-bg").style.backgroundSize = "cover";
</script>   
@endsection