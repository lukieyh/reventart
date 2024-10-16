<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaVendedor;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('pages.home');
});


Route::get('/teste', [PaginaVendedor::class, 'teste']);