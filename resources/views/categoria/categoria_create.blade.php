@extends('adminlte::page')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ url('/categoria')}}">

                    @csrf

                    <div class="mb-3 mx-2">
                      <label class="form-label">Nome</label>
                      <input type="text" name="nome" class="form-control" placeholder="Digite o nome da categoria">
                    </div>
                    <button type="submit" class="btn btn-primary btn-md my-2 mx-2">Enviar</button>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
