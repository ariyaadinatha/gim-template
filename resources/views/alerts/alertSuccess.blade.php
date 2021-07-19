@if (session('status'))
    <div class="alert alert-success alert-dismissible fade-in" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
@endif