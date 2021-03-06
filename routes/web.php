<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;
//use Illuminate\Support\Facades\DB; //Librería para el query builder

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


Route::resource('/tarea', TareasController::class);

/*
Route::get('/tareas', [TareasController::class, 'index']);

Route::get('/tareas/create', [TareasController::class, 'create']);

Route::post('/tareas/strore', [TareasController::class, 'store']);*/

Route::get('/hola-mundo/{name?}', function($name=null){
    return view('paginas.hola-mundo', compact('name'));
});
