@extends('home')
@section('conteudo')

<a class="btn btn-primary" href="{{ route('items.create') }}">Incluir</a>
        <table class="table table-bordered ">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $i)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$i->id}}</td>
                        <td>{{$i->descricao}}</td>                        
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
 