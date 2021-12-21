@extends('layouts.app')

@section('content')
<form method="POST" action="/shopping-list">
    @csrf
    <div class="mb-3">
        <label for="item" class="form-label">Item</label>
        <input type="text" class="form-control" id="item" name="item">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="checked" name="checked">
        <label class="form-check-label" for="checked">Comprado?</label>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
