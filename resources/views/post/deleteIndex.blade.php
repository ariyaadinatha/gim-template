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

    .modal-footer .btn-secondary {
        color: white !important;
    }

    .modal-footer .btn-link {
        color: #C93433 !important;
        transition: all 0.1s;
    }

    .modal-footer .btn-link:hover {
        background-color: #fccfcf;
    }

    .modal-footer .btn {
        cursor: pointer;
    }

    .modal-header{
        background-color: #343A40;
        border: none;
        border-radius: 0 !important;
        color: white;
    }

    .modal-close.close {
        color: white !important;
    }

</style>
@endsection

@section('title')
Delete Post Index - Guild Master Dashboard 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark" style="color: white">Posts</div>

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
                                    <a style="text-decoration: none !important" data-toggle="modal" data-target="#alertModal" onclick="modalPopup('{{$post->title}}', {!!$post->id!!})">
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

<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete this post? <b>You cannot undo this operation.</b>
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                <a class="btn btn-link" href="">I'm sure</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        function modalPopup(title, id){
            var modalTitle = "Delete " + title;
            var modalLink = "/guild-master/delete/" + id;

            document.querySelector(".modal-title").innerHTML = modalTitle;
            document.querySelector(".modal-footer a.btn-link").href = modalLink;
        }
        
    </script>
@endsection