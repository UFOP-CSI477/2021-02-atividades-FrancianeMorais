@extends('home')
@section('conteudo')

<form action="{{route('entidades.store') }}" method="post">
    @csrf

    <div class="my-4">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control
        @error('nome')
            is-invalid
        @enderror" value="{{ old('nome') }}">
    </div>

    <div class="my-4">
        <label for="bairro" class="form-label">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control
        @error('bairro')
            is-invalid
        @enderror" value="{{ old('bairro') }}">
    </div>

    <div class="my-4">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control
        @error('cidade')
            is-invalid
        @enderror" value="{{ old('cidade') }}">
    </div>

    <div class="my-4">
        <label for="estado" class="form-label">Estado:</label>
        <input type="text" name="estado" id="estado" class="form-control
        @error('estado')
            is-invalid
        @enderror" value="{{ old('estado') }}">
    </div>

    <div class="my-4">
        <input type="submit" value="Cadastrar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection