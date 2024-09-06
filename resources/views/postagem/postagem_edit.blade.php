@extends('adminlte::page')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <a href="{{ url('/postagem') }}" class="btn btn-secondary btn-sm my-4" role="button" aria-disabled="true">Voltar</a>


                <form method="POST" action="{{ url('/postagem/' . $postagem->id )}}">
                    @method('PUT')
                    @csrf

                    <label for="cate">Escolha uma categoria:</label><br>
                    <select name="categoria_id" id="cate" class="form-control">
                        @foreach ($categorias as $value)

                        @if ($value->id == $postagem->categoria_id)
                            <option selected="selected" value="{{ $value->id }}">{{ $value->nome }}</option>
                        @else
                            <option value="{{ $value->id }}">{{ $value->nome }}</option>
                        @endif

                        @endforeach

                    </select>

                    <div class="mb-3">
                      <label class="form-label">Título</label>
                      <input type="text" name="titulo" class="form-control" value="{{ $postagem->titulo }}">
                    </div>
                    <textarea name="conteudo" class="form-control" placeholder="Digite o título da postagem" rows="4" col="50">{{ $postagem->conteudo }}</textarea>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>

                </form>

                </div>
            </div>
    </div>
</div>
@endsection
