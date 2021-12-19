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
                <button type="button" class="btn btn-outline-danger">Excluir</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $lists->links()}}
@endsection
