@extends('adm')

@section('conteudo')

<h1>Dados das Entidades: {{ $entidade->nome }}</h1>

<ul>
    <li>Id: {{$entidade->id}}</li>
    <li>Nome: {{$entidade->nome}}</li>
    <li>Bairro: {{$entidade->bairro}}</li>
    <li>Cidade: {{$entidade->cidade}}</li>
    <li>Estado: {{$entidade->estado}}</li>
    <li>Criação: {{$entidade->created_at}}</li>
    <li>Última alteração: {{$entidade->updated_at}}</li>
</ul>
<div>
    <a href="{{ route('home')}}" class="btn btn-primary">Voltar</a>
    <a href="{{route('entidades.edit', $entidade->id)}}" class="btn btn-warning">Editar</a>
    <a href="#" class="btn btn-danger" onclick="confirmaExclusao()">Excluir</a>
</div>

<form name="exclusao" action="{{ route('entidades.destroy', $entidade->id) }}" method="post">
    @csrf
    @method('DELETE')
</form>

<script>
    function confirmaExclusao() {
        if (confirm('Deseja realmente excluir esta entidade?')) {
            document.exclusao.submit();
        }
    }
</script>

@endsection