@extends('index')

@section('content')

    <div class="container">
        <h1 class="">Hello, world!</h1>
        <p>This is a Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>

    <div class="container">

        <div class="row">
            <posts :all-posts='@json($usersWithPosts)'></posts>
        </div>

        <hr>

    </div>

@endsection