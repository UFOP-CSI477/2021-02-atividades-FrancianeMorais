@extends('main')

@section('title', 'Adoção')

@section('links')
  <link rel="stylesheet" href="{{ asset('css/adoptions.css') }}">
  <link rel="stylesheet" href="{{ asset('css/donations.css') }}">
@endsection

@section('content')
<div class="container inner-container">
    <div class="table-container">
        <h1 class="donation-logs-title">Histórico de Doações</h1>
        <table class="table">
            <thead>
                <th>No.</th>
                <th>Valor</th>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>$ {{ $donation->amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
