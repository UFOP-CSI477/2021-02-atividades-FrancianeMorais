@extends('main')

@section('title', 'Doações')

@section('links')
  <link rel="stylesheet" href="{{ asset('css/donations.css') }}">
@endsection

@section('content')
<div class="container inner-container">
    <div class="panel-container">
        <div class="img">
        </div>
        <div>
            <div class="form-container">
                <form action="/donations" method="POST">
                    @csrf
                    <h1 class="title">Sua doação é importante!</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Valor</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="amount" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Doar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
