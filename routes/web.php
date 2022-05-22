<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $fornecedores = [
        ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '0.0.0.0', 'ddd' => '11', 'telefone' => '999457315'],
        ['nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => '45121', 'ddd' => '21', 'telefone' => '999468273'],
        ['nome' => 'Fornecedor 3', 'status' => 'N', 'cnpj' => '35747', 'ddd' => '85', 'telefone' => '9999999999']
    ];
    $cliente = 5;
    return view('syntax', compact('fornecedores', 'cliente'));
});
