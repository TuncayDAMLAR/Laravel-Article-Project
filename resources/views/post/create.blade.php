@extends('layouts.app')

@section('content')

<h2>create</h2>
{!! Form::open(['action' => 'PostController@store', 'method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'Başlık' )}} <br>
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'başlık giriniz..'])}} <br>
    
</div>


<div class="form-group">
    {{Form::label('body', 'metin' )}} <br>
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'başlık giriniz..'])}} <br>
    
</div>

{!! Form::submit('Sumbit', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection