@extends("template.main")
<!--
 *  CONTENTS
 * ============================
 * ## 1. Jumbotron
 * ## 2. Post Article
 * ## 3. Activities Section
 * ## 4. Social Media
-->

@section('title', 'Landing - GIM ITB')

@section('content')

<!-- ## 1. Jumbotron ========= -->
<div class="jumbotron d-flex">
  <div class="align-self-center container">
    <h1 class="display-4">Ganesha <br> <i> Interactive  </i> <br> Media </h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
</div>
<!-- ## END of Jumbotron ========= -->

<div class="container">
  <!-- ## 2. Post Article ========= -->
  
  <div class="display-4"> Recent Post </div>
  <hr class="my-3 title-hr">
  <div class="row mb-4">

    @if(count($posts ?? '') > 0)
      @foreach ($posts ?? '' as $post)

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
  <!-- ## END of Post Article ========= -->

  <!-- ## 3. Activities Section ========= -->
  <div class="display-4"> Activities </div>
  <hr class="my-3 title-hr">
  <div class="row mb-4">

    <div class="col-sm-12 col-md-6 col-lg-6 py-2">
      <img class="card-img" src="https://dummyimage.com/1280x720/bababa/ffffff" alt="Card image">
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 py-2 d-flex">
      <div class="align-self-center">
        <h5 class="activity-title"> Lorem Ipsum </h5>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus officia, minus expedita atque rerum minima provident q
        uas facere dicta sunt beatae dignissimos reprehenderit illo nemo itaque, cumque quibusdam. Et, itaque.
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 py-2 d-flex">
      <div class="align-self-center">
        <h5 class="activity-title"> Lorem Ipsum </h5>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus officia, minus expedita atque rerum minima provident q
        uas facere dicta sunt beatae dignissimos reprehenderit illo nemo itaque, cumque quibusdam. Et, itaque.
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 py-2">
      <img class="card-img" src="https://dummyimage.com/1280x720/bababa/ffffff" alt="Card image">
    </div>
  </div>
  <!-- ## END of Activities Section ========= -->

  <!-- ## 3. Social Media Section ========= -->
  <div class="display-4"> Social Media </div>
  <hr class="my-3 title-hr">
  
  <div class="row mb-4">
    <div class="col-sm-4 col-md-4 col-lg-4 py-2">
        <img class="card-img" src="https://dummyimage.com/150x150/bababa/ffffff" alt="Card image">
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4 py-2">
        <img class="card-img" src="https://dummyimage.com/150x150/bababa/ffffff" alt="Card image">
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4 py-2">
        <img class="card-img" src="https://dummyimage.com/150x150/bababa/ffffff" alt="Card image">
    </div>

  </div>
  <!-- ## END of Social Media Section ========= -->

</div>

@endsection