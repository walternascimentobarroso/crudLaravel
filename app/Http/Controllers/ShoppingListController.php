<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function index()
    {
        echo ('<pre>');
        print_r(ShoppingList::all()->toArray());
        echo ('</pre>');
        return view('shopping-list');
    }

    public function create()
    {
        return view('shopping-list-form');
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
}
