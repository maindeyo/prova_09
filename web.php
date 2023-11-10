<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AutomovelController;
use App\Http\Controllers\ImovelController;
use App\Models\Automovel;
use App\Models\Imovel;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', [UserController::class, 'create']);
Route::post('/register/store', [UserController::class, 'store']);

Route::get('/automovel', [AutomovelController::class, 'create'])->name('create.automovel');
Route::post('/automovel/save', [AutomovelController::class, 'store'])->name('register.automovel');
Route::get('/automovel/show', [AutomovelController::class, 'index'])->name('show.automovel');
Route::get('/delete/automovel/{id}', [AutomovelController::class, 'delete'])->name('automoveis.delete');
// Route::get('/edit/automovel/{id}', [AutomovelController::class, 'edit'])->name('automoveis.edit');
// Route::put('/automovel/update/{id}', [AutomovelController::class, 'update'])->name('automoveis.update');


Route::get('/imovel', [ImovelController::class, 'create']);
Route::post('/imovel/save', [ImovelController::class, 'store']);
Route::get('/imovel/show', [ImovelController::class, 'index'])->name('show.imovel');
Route::get('/delete/imovel/{id}', [ImovelController::class, 'delete'])->name('imoveis.delete');



