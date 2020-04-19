

@extends('layouts.app')


@section('content')

<div class="jumbotron   text-center">
<h1>{{$hg}}</h1>

<p> <a class="btn btn-primary btn-lg" href="/login">Giris</a> 
    <a class="btn btn-success btn-lg" href="/register">Kayıt</a>

</p>

</div>


@endsection
