<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingListController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/shopping-list', function () {
//     return view('shopping-list');
// });

Route::get('/shopping-list', [ShoppingListController::class, 'index'])->name('shopping-list');
Route::get('/shopping-list/create', [ShoppingListController::class, 'create']);
Route::post('/shopping-list/store', [ShoppingListController::class, 'store']);
