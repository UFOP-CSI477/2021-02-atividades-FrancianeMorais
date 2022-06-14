@extends('main')

@section('title', 'Adoção')

@section('links')
  <link rel="stylesheet" href="{{ asset('css/adoptions.css') }}">
@endsection

@section('content')
<div class="container inner-container">
    <div class="top-bar">
        <h1>Adote!</h1>
        @if (session('id'))
            <a href="/adoptions/create" class="btn btn-success">Novo</a>
        @endif
    </div>
    <div class="cards-container">
        <div class="cards">
            @foreach ($adoptions as $adoption)
                <div class="card-container">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ $adoption->image }}" alt="rover" />
                        </div>
                        <div class="card-body">
                            <div class="card_info">
                                <div>
                                    <span class="tag tag-teal">{{ $adoption->animal_type }}</span>
                                </div>
                                <h4>{{ $adoption->animal_name }}</h4>
                                <p>{{ $adoption->description }}</p>
                            </div>
                            <a class="btn btn-primary">Entrar em contato</a>
                            @if (session('id'))
                                <a href="/adoptions/delete/{{$adoption->id}}" class="btn btn-danger">Excluir</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
