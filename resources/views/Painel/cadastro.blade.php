

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Página de Cadastro</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('produto.cadastro') }}" class="form">
            {!!csrf_field()!!}
            <input class="form-control" type="text" name="nome" id="nome" value="{{old('nome')}}">
            <button type="submit" class="btn btn-success">Enviar</button>
        </form> 
    </div>
@endsection