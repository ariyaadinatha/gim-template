@extends('layouts.app')

@section('title')
Editing {{$post->title}} - Guild Master Dashboard 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark" style="color: white">Update <b>"{{$post->title}}"</b></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <small>/ <a href='/home'>Home</a> / <a href='/guild-master/update'>Update Index</a></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <form action="" method="post" class='py-3'>
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="imgurl">Image URL</label>
                                    <input type="text" class="form-control" id="imgurl" name="imgurl" value="{{$post->imgurl}}" placeholder="Enter a hosted image url">
                                </div>
                                <div class="form-group">
                                    <textarea name="editor1">
                                        {{$post->body}}
                                    </textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                <div class="form-group" style="display: flex; justify-content: flex-end">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
