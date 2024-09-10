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
                        <textarea id="inp_editor1" name="conteudo" class="form-control" rows="4" col="50"></textarea>
                      </div>

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
