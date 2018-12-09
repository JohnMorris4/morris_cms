@extends('main')

@section('content')

<form class="contact">
    {{@csrf_field()}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
        </div>
    </div>

</form>

@endsection
