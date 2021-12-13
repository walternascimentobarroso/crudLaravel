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
        return view('shopping-list.index', compact('lists'));
    }

    public function create()
    {
        return view('shopping-list.form');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'item' => 'required',
            'price' => 'required'
        ]);

        ShoppingList::create($request->all());

        return redirect()->route('shopping-list');
    }

    public function show(ShoppingList $shoppingList)
    {
        return view('shopping-list.show', compact('shoppingList'));
    }
}
