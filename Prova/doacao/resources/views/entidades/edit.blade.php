@extends('adm')

@section('conteudo')

<form action="{{ route('entidades.update', $entidade->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="my-4">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control
        @error('nome')
            is-invalid
        @enderror" value="{{ old('nome', $entidade) }}">
    </div>

    <div class="my-4">
        <label for="bairro" class="form-label">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control
        @error('bairro')
            is-invalid
        @enderror" value="{{ old('bairro', $entidade) }}">
    </div>

    <div class="my-4">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control
        @error('cidade')
            is-invalid
        @enderror" value="{{ old('cidade', $entidade) }}">
    </div>

    <div class="my-4">
        <label for="estado" class="form-label">Estado:</label>
        <input type="text" name="estado" id="estado" class="form-control
        @error('estado')
            is-invalid
        @enderror" value="{{ old('estado', $entidade) }}">
    </div>

    <div class="my-4">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
        <input type="submit" value="Atualizar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection