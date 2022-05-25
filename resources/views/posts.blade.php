@extends('index')

@section('content')

    <posts :all-posts="{{json_encode($allPosts)}}"></posts>

@endsection



