@extends('app');

@section('content')

        <h1 class="mb-5">Adicionar CEP</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action = "{{route('save')}}" method="POST">
    @csrf
    <div class="form-group">
            <label>CEP:</label>
            <input type="text" class="form-control" name="cep" value="{{$cep}}">
        </div>
        <div class="form-group">
            <label>Logradouro:</label>
            <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
        </div>
        <div class="form-group">
            <label>Número:</label>
            <input type="text" class="form-control" name="numero">
        </div>
        <div class="form-group">
            <label>Bairro:</label>
            <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
        </div>
        <div class="form-group">
            <label>Cidade:</label>
            <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
        </div>
        <div class="form-group">
            <label>Estado:</label>
            <input type="text" class="form-control" name="estado" value="{{$estado}}">
        </div>

  <h2>
  <button type="submit" class="btn btn-primary">Salvar</button>
  </h2>

@endsection