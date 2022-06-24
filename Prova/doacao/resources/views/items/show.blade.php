@extends('adm')

@section('conteudo')

<h1>Dados das Entidades: {{ $item->nome }}</h1>

<ul>
    <li>Id: {{$item->id}}</li>
    <li>Descrição: {{$item->decricao}}</li>    
    <li>Criação: {{$item->created_at}}</li>
    <li>Última alteração: {{$item->updated_at}}</li>
</ul>
<div>
    <a href="{{ route('home')}}" class="btn btn-primary">Voltar</a>
    <a href="{{route('items.edit', $items->id)}}" class="btn btn-warning">Editar</a>
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