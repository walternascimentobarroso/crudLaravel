@extends('layouts.app')

@section('content')
<form method="POST" action="/shopping-list/{{ $shoppingList->id}}">
    <!-- <input type="hidden" name="_method" value="PUT" /> -->
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="item" class="form-label">Item</label>
        <input type="text" class="form-control" id="item" name="item" value="{{ $shoppingList->item}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $shoppingList->price}}">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="checked" name="checked" {{ $shoppingList->checked ? 'checked' : ''}}>
        <label class="form-check-label" for="checked">Comprado?</label>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
