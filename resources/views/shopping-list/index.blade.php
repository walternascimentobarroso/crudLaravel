@extends('layouts.app')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show">
    <p>{{ $message }}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<a href="/shopping-list/create" class="btn btn-outline-success">Adicionar</a>
<hr />
<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Item</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lists as $list)
        <tr>
            @php
            $style = $list->checked ? 'line-through' : 'none';
            @endphp
            <td style="text-decoration: {!! $style !!}">{{ $list->id }}</td>
            <td style="text-decoration: {!! $style !!}">{{ $list->item}}</td>
            <td>
                <a href="/shopping-list/{{ $list->id}}" class="btn btn-outline-info">Ver</a>
                <a href="/shopping-list/{{ $list->id}}/edit" class="btn btn-outline-warning">Editar</a>
                <!-- <form action="/shopping-list/{{ $list->id}}" method="POST" style="display: inline;">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                </form> -->
                <button type="button" class="btn btn-outline-danger removeItem" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$list->id}}" data-item="{{$list->item}}">
                    Excluir
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<form method="POST" id="formRemove">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    O item <strong id="showItem"></strong> sera removido.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-outline-danger">Remover</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    let removeItems = document.querySelectorAll('.removeItem');
    removeItems.forEach(removeItem => {
        removeItem.addEventListener('click', changeRoute);
    });

    function changeRoute({
        target: {
            dataset
        }
    }) {
        formRemove.action = `/shopping-list/${dataset.id}`;
        showItem.innerText = dataset.item;
    }
</script>

{{ $lists->links()}}
@endsection
