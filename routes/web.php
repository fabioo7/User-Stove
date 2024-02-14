<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataTableController;
use App\Http\Controllers\usersController;


////////Produtos
Route::get('dashboard', [usersController::class, 'dashboard']);
Route::get('listUsers',  [dataTableController::class, 'users'])->name('users.datatables');
Route::POST('modalCadUsers',  [usersController::class, 'modalCadUsers']);
Route::POST('modalEditUsers',  [usersController::class, 'modalEditUsers']);

Route::get('autocomplete', [usersController::class, 'autocomplete']);
Route::get('vue', [usersController::class, 'vue']);



require __DIR__.'/auth.php';
