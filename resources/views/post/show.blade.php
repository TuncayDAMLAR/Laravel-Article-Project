@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-default">Go Back </a>

<h1> {{ $post->title }}</h1>

<div> 
    <p>
        {{$post->body}}
    </p>

</div>

<small> {{$post->created_at}} </small>

@endsection