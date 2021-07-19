@extends('layouts.app')

@section('title')
Create Post - GIM Admin Dashboard 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark" style="color: white">Create Post</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <small>/ <a href='/landing'>Home</a></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <form action="" method="post" class='py-3'>
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="imgurl">Image URL</label>
                                    <input type="text" class="form-control" id="imgurl" name="imgurl" placeholder="Enter a hosted image url">
                                </div>
                                <div class="form-group">
                                    <label for="editor1">Content</label>
                                    <textarea name="editor1" id='editor1'></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                <div class="form-group" style="display: flex; justify-content: flex-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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

