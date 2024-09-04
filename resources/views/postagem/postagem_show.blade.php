@extends('adminlte::page')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <a href="{{ url('/postagem') }}" class="btn btn-secondary btn-sm my-4" role="button" aria-disabled="true">Voltar</a>

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de Criação</th>
                            <th>Último Update</th>
                        </tr>
                        <tr>
                            <td>{{ $postagem->id }}</td>
                            <td>{{ $postagem->nome }}</td>
                            <td>{{ $postagem->created_at }}</td>
                            <td>{{ $postagem->updated_at }}</td>
                        </tr>
                    </table>

            </div>
        </div>
    </div>
    </div>
@endsection
