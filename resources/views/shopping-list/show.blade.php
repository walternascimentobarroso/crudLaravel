@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Ver Item</div>
    <div class="card-body">
        <h5 class="card-title">{{ $shoppingList->item }}</h5>
        <div class="card-text"> <strong>Valor</strong> R$ {{ $shoppingList->price }}</div>
        <div class="card-text">
            <strong>Item comprado?</strong>
            @if($shoppingList->checked)
            <span class="badge bg-success">Sim</span>
            @else
            <span class="badge bg-danger">Não</span>
            @endif
        </div>
    </div>
    <div class="card-footer">
        <!-- <button class="btn btn-outline-secondary" onclick="history.back()">Voltar</button> -->
        <a href="/shopping-list" class="btn btn-outline-secondary">Voltar</a>
    </div>
</div>
@endsection
