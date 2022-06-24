@extends('adm')

@section('conteudo')

<div class="container mb-4">
    <h2>Lista de coletas</h2>
</div>

<table class="table table-bordered ">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Item</th>
            <th scope="col">Entidade</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Data</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($coletas as $coleta)
        <tr>
            <th scope="row">{{$coleta->id}}</th>
            <td>{{$coleta->item->descricao}}</td>
            <td>{{$coleta->entidade->nome}}</td>
            <td>{{$coleta->quantidade }}</td>
            <td>{{date("d/m/Y", strtotime($coleta->data))}}</td>
            <td class="d-flex">
                <a href="{{ route('coletas.show', $coleta->id) }}" class="btn btn-primary">Ver</a>
                <span class="px-1"></span>
                <a href="{{ route('coletas.edit', $coleta->id) }}" class="btn btn-warning">Editar</a>
                <span class="px-1"></span>
                <form name="exclusao" action="{{ route('coletas.destroy', $coleta->id) }}" method="post" onsubmit="return confirm('Deseja realmente excluir esta coleta?');">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('coletas.create') }}">Incluir</a>

@endsection