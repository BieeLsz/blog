@extends('adminlte::page')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="d-grid gap-2 mx-auto my-2">
                    <a href="{{ url('/categoria/create') }}" class="btn btn-success btn-md" role="button" aria-disabled="true">Criar</a>
                </div>

                @if(session('mensagem'))
                    <div class="alert alert-success mx-auto">
                        {{ session('mensagem') }}
                    </div>
                @endif
                @if(session('exclusao'))
                <div class="alert alert-danger mx-auto">
                    {{ session('exclusao') }}
                </div>
                @endif

                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                        @foreach ($categorias as $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td>{{ $value->nome }}</td>
                            <td>
                                <a href="{{ url('/categoria/' .  $value->id) }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Visualizar</a>

                                <a href="{{ url('/categoria/' .  $value->id) . "/edit" }}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">Editar</a>

                                <form method="POST" action="{{url('/categoria/' . $value->id)}}">
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
</div>
@endsection
