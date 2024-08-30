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

                <form method="POST" action="{{ url('/categoria')}}" class="my-3">

                    @csrf

                    <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" name="nome" class="form-control" placeholder="Digite o nome da categoria">
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
