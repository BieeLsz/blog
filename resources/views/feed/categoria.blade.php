@extends('layouts.app')

@section('content')

    @foreach( $categorias as $value)

    <p><a href="{{ url('/feed/categoria/' . $value->id)}}">{{ $value->nome }}</a></p>

    @endforeach

@endsection
