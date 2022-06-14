@extends('main')

@section('title', 'Login')

@section('links')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="container inner-container">
    <div class="panel-container">
        <div class="img"></div>
        <div class="panel-right">
            <div class="form-container">
                <form action="auth" method="POST">
                    @csrf
                    <div>
                        <div class="svg"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="password"  id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-success">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
