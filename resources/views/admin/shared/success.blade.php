@if(session('message'))
    <h6 class="alert alert-success">
        {{ session('message') }}
    </h6>
@endif