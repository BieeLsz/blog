@extends('layouts.app')

@section('content')
    <p>{{ $postagem->titulo }}</p>

    <form method="POST" action="{{ url('/comentario') }}">
        @csrf
        <div class="form-group">
            <label for="comentario">Comentario</label>
            <input type="hidden" name="postagem_id" value="{{ $postagem->id }}">
            <textarea name="conteudo" cols="40" rows="4"></textarea>
        </div>
        <input type="submit" value="Enviar">
    </form>

    @foreach ($postagem->comentarios as $value)
        <p> -> {{ $value->conteudo }}</p>
        <p> ->> {{ $value->autor->name }}</p>
    @endforeach
@endsection
