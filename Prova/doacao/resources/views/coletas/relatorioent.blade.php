@extends('geral')

@section('conteudo')

<div class="container mb-4">
    <h2>Total geral de doações recebidas</h2>
</div>

<table class="table table-bordered ">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Entidade</th>
            <th scope="col">Itens</th>
        </tr>
    </thead>
    <tbody>

        @for($i = 0; $i < $entidades->count(); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$entidades[$i]->nome}}</td>
                <td>{{$totalColetas[$i]}}</td>
            </tr>
            @endfor
            <tr>
                <th scope="row"></th>
                <th>TOTAL GERAL</th>
                <th>{{$result}}</th>
            </tr>
    </tbody>
</table>

@endsection