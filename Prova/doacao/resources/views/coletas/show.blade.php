@extends('adm')

@section('conteudo')

<h1>Dados da coleta:</h1>

<ul>
    <li>Id: {{$coleta->id}}</li>
    <li>Item: {{$coleta->item->descricao}}</li>
    <li>Entidade: {{$coleta->entidade->nome}}</li>
    <li>Quantidade: {{$coleta->quantidade}}</li>
    <li>Data: {{date("d/m/Y", strtotime($coleta->data))}}</li>
    <li>Criação: {{$coleta->created_at}}</li>
    <li>Última alteração: {{$coleta->updated_at}}</li>
</ul>
<div>
    <a href="{{ route('home')}}" class="btn btn-primary">Voltar</a>
    <a href="{{ route('coletas.edit', $coleta->id)}}" class="btn btn-warning">Editar</a>
    <a href="#" class="btn btn-danger" onclick="confirmaExclusao()">Excluir</a>
</div>

<form name="exclusao" action="{{ route('coletas.destroy', $coleta->id) }}" method="post">
    @csrf
    @method('DELETE')
</form>

<script>
    function confirmaExclusao() {
        if (confirm('Deseja realmente excluir esta coleta?')) {
            document.exclusao.submit();
        }
    }
</script>

@endsection