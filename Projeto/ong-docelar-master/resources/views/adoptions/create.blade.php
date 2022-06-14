@extends('main')

@section('title', 'Cadastrar adoção')

@section('links')
  <link rel="stylesheet" href="{{ asset('css/adoptions.css') }}">
@endsection

@section('content')
<div class="container inner-container">
    <div class="panel-container">
        <div class="img">
        </div>
        <div>
            <div class="form-container">
                <form action="/adoptions" method="POST">
                    @csrf
                    <h1 class="title">Cadastrar doação</h1>
                    <div class="form-group mb-3">
                        {{ Form::label('animal_name', 'Nome') }}
                        {{ Form::text('animal_name', $adoption->animal_name, ['class' => 'form-control' . ($errors->has('animal_name') ? ' is-invalid' : ''), 'placeholder' => 'Nome']) }}
                        {!! $errors->first('animal_name', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        {{ Form::label('description', 'Descrição') }}
                        {{ Form::textarea('description', $adoption->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descrição']) }}
                        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        {{ Form::label('image', 'Foto') }}
                        {{ Form::text('image', $adoption->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'URL']) }}
                        {!! $errors->first('animal_name', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group mb-3">
                        {{ Form::label('animal_type', 'Tipo') }}
                        {{ Form::select('animal_type', ['Gato' => 'Gato', 'Cachorro' => 'Cachorro'], $adoption->animal_type ?? 1, ['class' => 'form-control']); }}
                        {!! $errors->first('animal_type', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <button type="submit" class="btn bg-primary_">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
