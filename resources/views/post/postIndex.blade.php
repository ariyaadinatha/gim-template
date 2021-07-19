@extends("template.main")

@section('title', 'Post - GIM')

@section('content')
<div class="container mt-4">
    <div class="display-4"> Post </div>
    <hr class="my-3 title-hr">
    <div class="row mb-4">

        @if(count($posts) > 0)
          @foreach ($posts as $post)

          <div class="col-sm-12 col-md-6 col-lg-4 py-2">
          <img class="card-img" src="{{$post->imgurl}}" alt="Card image">
          <div class="card-img-overlay d-flex flex-column">
            <h5 class="post-title mt-auto"> 
              <a href="/post/{{$post->id}}"> {{$post->title}} </a>
            </h5>
          </div>
        </div>
          @endforeach
        @else
            <p class='text-secondary'>No posts yet.</p>
        @endif
    </div>
</div>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>

@foreach ($posts as $post)
<script>
    document.querySelector(".post-{{$post->id}}").style.background = " linear-gradient(360deg, #000000 5%, rgba(50, 23, 64, 0.3) 75%), url({{$post->imgurl}}) no-repeat center center";
    document.querySelector(".post-{{$post->id}}").style.backgroundSize = "cover";
</script>    
@endforeach

@endsection
