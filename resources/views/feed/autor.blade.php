@extends('layouts.app')

@section('content')

    @foreach( $autores as $value)

    <p><a href="{{ url('/feed/autor/' . $value->id)}}">{{ $value->name }}</a></p>

    @endforeach

@endsection
