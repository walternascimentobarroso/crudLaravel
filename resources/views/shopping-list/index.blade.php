@extends('layouts.app')

@section('content')
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
            <td>{{ $list->id }}</td>
            <td>{{ $list->item}}</td>
            <td>
                <a href="/shopping-list/{{ $list->id}}" class="btn btn-outline-info">Ver</a>
                <button type="button" class="btn btn-outline-warning">Editar</button>
                <button type="button" class="btn btn-outline-danger">Excluir</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $lists->links()}}
@endsection
