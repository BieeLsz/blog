@extends('adminlte::page')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <a href="{{ url('/postagem') }}" class="btn btn-secondary btn-sm my-4" role="button" aria-disabled="true">Voltar</a>

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Título</th>
                            <th>Conteúdo</th>
                            <th>Autor</th>
                            <th>Data de Criação</th>
                            <th>Último Update</th>
                        </tr>
                        <tr>
                            <td>{{ $postagem->id }}</td>
                            <td>{{ $postagem->categoria->nome }}</td>
                            <td>{{ $postagem->titulo }}</td>
                            <td>{{ $postagem->conteudo }}</td>
                            <td>{{ $postagem->autor->name }}</td>
                            <td>{{ $postagem->created_at }}</td>
                            <td>{{ $postagem->updated_at }}</td>
                        </tr>
                    </table>

            </div>
        </div>
    </div>
    </div>
@endsection
