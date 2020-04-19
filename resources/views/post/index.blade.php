@extends('layouts.app')

@section('content')


@if(count($posts)>0 )
    @foreach ($posts as $post)
        <div class="well">

        <h3> <a href="/posts/{{$post->id}}" >    {{$post->title}} </a> </h3>
            <small>written on {{$post->created_at}} </small>
        </div>
        
    @endforeach
    {{ $posts->links() }}<!-- sayfalama yapmak için -->
@else
 <p>No Post Found</p>
@endif


@endsection