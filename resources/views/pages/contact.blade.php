@extends('layouts.app')


@section('content')
{{$tittle}}
@if( count($telnolar)>0 )

@foreach ($telnolar as $telno)
<li>{{$telno}} </li>
    
@endforeach



@endif




@endsection
