@extends('layouts.app')

@section('content')

<h1>Ciao sono home blade</h1>
@foreach ($trains as $train)
<p>{{$train->azienda}}</p>

@endforeach

@endsection
