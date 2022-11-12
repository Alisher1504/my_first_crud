<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/crud', [CrudController::class, 'index']);
Route::get('/store', [CrudController::class, 'store']);
Route::post('/crudadd', [CrudController::class, 'create']);
Route::get('/deletecrud/{id}', [CrudController::class, 'destroy']);
Route::get('/updatecrud/{id}', [CrudController::class, 'update']);
Route::post('/update/{id}', [CrudController::class, 'edit']);
Route::get('/viewcrud/{id}', [CrudController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
