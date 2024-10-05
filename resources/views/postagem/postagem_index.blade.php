@extends('adminlte::page')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('mensagem'))
                    <div class="alert alert-success mx-auto my-1">
                        {{ session('mensagem') }}
                    </div>
                @endif
                @if (session('exclusao'))
                    <div class="alert alert-danger mx-auto my-2">
                        {{ session('exclusao') }}
                    </div>
                @endif

                <div class="d-flex justify-content-center m-3">
                    <a href="{{ url('/postagem/create') }}" class="btn btn-success btn-lg" role="button"
                        aria-disabled="true">Criar</a>
                </div>

                <script>
                    function ComfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registo?');
                    };
                </script>

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Título</th>
                        <th class="text-center">Ações</th>
                    </tr>
                    @foreach ($postagens as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->categoria->nome }}</td>
                            <td>{{ $value->titulo }}</td>
                            <td class="d-flex justify-content-around">
                                <a href="{{ url('/postagem/' . $value->id) }}" class="btn btn-primary btn-sm"
                                    role="button" aria-disabled="true">Visualizar</a>

                                <a href="{{ url('/postagem/' . $value->id) . '/edit' }}" class="btn btn-warning btn-sm"
                                    role="button" aria-disabled="true">Editar</a>

                                <form method="POST" action='{{ url('/postagem/' . $value->id) }}'
                                    onsubmit="return ComfirmDelete()">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger btn-sm" role="button" type="submit" value="Excluir">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
