@extends('adminlte::page')


@section('content')

<link rel="stylesheet" href=" {{url('/richtexteditor/rte_theme_default.css')}}" />
<script type="text/javascript" src="{{url('/richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src='{{url('/richtexteditor/plugins/all_plugins.js')}}'></script>

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


                <form method="POST" action="{{ url('/postagem/' . $postagem->id )}}" enctype="multipart/form-data">
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
                        <label class="form-label">Imagem</label><br>
                        <input type="file" name="imagem">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Título</label>
                      <input type="text" name="titulo" class="form-control" value="{{ $postagem->titulo }}">
                    </div>
                    <textarea id="inp_editor1" name="conteudo" class="form-control" placeholder="Digite o título da postagem" rows="4" col="50">{{ $postagem->conteudo }}</textarea>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>

                </form>

                <script>
                    var editor1 = new RichTextEditor("#inp_editor1");
                </script>

                </div>
            </div>
    </div>
</div>
@endsection
