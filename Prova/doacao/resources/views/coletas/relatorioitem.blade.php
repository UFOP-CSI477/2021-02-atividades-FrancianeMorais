@extends('geral')

@section('conteudo')

    <div class="container mb-4">
        <h2>Total de itens recebidos</h2>
    </div>

    <table class="table table-bordered ">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody>

            @for($i = 0; $i < $items->count(); $i++)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$items[$i]->descricao}}</td>
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