@extends('home')
@section('conteudo')

<a class="btn btn-primary" href="{{ route('entidades.create') }}">Incluir</a>
        <table class="table table-bordered ">
            
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entidades as $e)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$e->id}}</td>
                        <td>{{$e->nome}}</td>
                        <td>{{$e->bairro}}</td>
                        <td>{{$e->cidade}}</td>
                        <td>{{$e->estado}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
    @if(session('mensagem'))
        <div class="alert alert-success">
            {{session('mensagem')}}
        </div>
    @endif    
    <a href="{{route('admini') }}" class="btn btn-primary">Voltar</a>
@endsection
 