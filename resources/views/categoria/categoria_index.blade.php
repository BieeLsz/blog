@extends('adminlte::page')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

                    <table class="table my-5">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th class="text-center">Ações</th>
                        </tr>
                        @foreach ($categorias as $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td>{{ $value->nome }}</td>
                            <td class="d-flex justify-content-around">
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
                        <div class="d-flex justify-content-end m-5">
                            <a href="{{ url('/categoria/create') }}" class="btn btn-success btn-md" role="button" aria-disabled="true">Criar</a>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection
