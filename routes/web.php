<?php

use App\Http\Controllers\crud_list;
use App\Http\Controllers\crudController;
use App\Http\Controllers\CrudListController;
use App\Models\crudList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientList', [crudController::class, 'index']);
Route::get('/formAgregar', [crudController::class, 'create']);
Route::post('/clientList', function (Request $request) {
    $validatedData = $request->validate([
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'company' => 'required|string',
        'ciudad' => 'required|string',
        'pais' => 'required|string',
        'telefono1' => 'required|numeric',
        'telefono2' => 'required|numeric',
        'email' => 'required|email',
        'website' => 'required|string',
    ]);

    crudList::create($validatedData);

    return redirect('/clientList');
}) -> name('clientList.store');
