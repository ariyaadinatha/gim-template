@extends('layouts.app')

@section('style')
<style>
    .buttoncard {
        border-left: 5px solid #343A40 !important;
        color: black;
        transition: 100ms all;
    }

    a > .buttoncard:hover{
        background-color: #e4e4e4;
    }
</style>
@endsection

@section('title')
Update Post Index - Guild Master Dashboard 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark" style="color: white">Update Post Index</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <small>/ <a href='/home'>Home</a></small>
                        </div>
                    </div>
                    
                    @include('alerts.alertSuccess')

                    @if(count($posts) > 0)
                        @foreach ($posts as $post)
                            <div class='row'>
                                <div class="col-12">
                                    <a href="/guild-master/update/{{$post->id}}" style="text-decoration: none !important">
                                        <div class="card buttoncard shadow-sm p-3 my-2">
                                            <h6>{{$post->title}}</h6>
                                        <small class="text-secondary">Created: {{$post->created_at}}</small>
                                        <small class="text-secondary">Last Update: {{$post->updated_at}}</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-12 my-4" style="display: flex; justify-content: center">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    @else
                        <p class='text-secondary'>No posts yet.</p>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
