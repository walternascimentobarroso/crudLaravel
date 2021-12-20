<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function index()
    {
        // echo ('<pre>');
        // print_r(ShoppingList::all()->toArray());
        // echo ('</pre>');
        $lists = ShoppingList::orderBy('item')->paginate(2);

        $breadcrumbs = [
            [
                'url' => '/',
                'name' => 'Inicio'
            ],
            [
                'url' => '#',
                'name' => 'Lista de compras'
            ]
        ];
        return view('shopping-list.index', compact('lists', 'breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs = [
            [
                'url' => '/',
                'name' => 'Inicio'
            ],
            [
                'url' => '/shopping-list',
                'name' => 'Lista de compras'
            ],
            [
                'url' => '#',
                'name' => 'Adicionar Item'
            ]
        ];
        return view('shopping-list.form', compact('breadcrumbs'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'item' => 'required',
            'price' => 'required'
        ]);

        ShoppingList::create($request->all());

        return redirect()->route('shopping-list')
            ->with('success', 'List created successfully');
    }

    public function show(ShoppingList $shoppingList)
    {
        $breadcrumbs = [
            [
                'url' => '/',
                'name' => 'Inicio'
            ],
            [
                'url' => '/shopping-list',
                'name' => 'Lista de compras'
            ],
            [
                'url' => '#',
                'name' => 'Visualizar Item'
            ]
        ];
        return view('shopping-list.show', compact('shoppingList', 'breadcrumbs'));
    }

    public function edit(ShoppingList $shoppingList)
    {
        $breadcrumbs = [
            [
                'url' => '/',
                'name' => 'Inicio'
            ],
            [
                'url' => '/shopping-list',
                'name' => 'Lista de compras'
            ],
            [
                'url' => '#',
                'name' => 'Editar Item'
            ]
        ];
        return view('shopping-list.edit', compact('shoppingList', 'breadcrumbs'));
    }

    public function update(ShoppingList $shoppingList, Request $request)
    {
        $input = (array_key_exists("checked", $request->all()))
            ? $request->all()
            : array_merge($request->all(), ['checked' => null]);
        $shoppingList->update($input);
        return redirect()->route('shopping-list')
            ->with('success', 'List updated successfully');
    }
}
