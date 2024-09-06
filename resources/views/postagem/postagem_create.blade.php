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

                <form method="POST" action="{{ url('/postagem')}}" >

                    @csrf
                    <label for="cate">Escolha uma categoria:</label><br>
                    <select name="categoria_id" id="cate" class="form-control">
                        @foreach ($categorias as $value)
                            <option value="{{ $value->id }}">{{ $value->nome }}</option>
                        @endforeach

                    </select>

                    <div class="mb-3">
                      <label class="form-label">Título</label>
                      <input type="text" name="titulo" class="form-control" placeholder="Digite o título da postagem">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Conteúdo</label>
                        <textarea name="conteudo" class="form-control" rows="4" col="50"></textarea>
                      </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>

                </form>

                </div>
        </div>
    </div>
</div>
@endsection
