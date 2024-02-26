<?php
namespace App\Http\Controllers;
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
    return view('welcome');
});


Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'hola'])->name('curso.show');
Route::get('/primo/{numero}', [CursoController::class, 'esPrimo'])->name('curso.esPrimo');
Route::get('/curso',[CursoController::class,'create']);
Route::post('/curso',[CursoController::class,'store'])->name('curso.store');

Route::get('/tallerprimo', [CursoController::class, 'create']);
Route::post('/tallerprimo', [CursoController::class, 'store'])->name('taller.store');

Route::get('/talleramigo', [CursoController::class, 'createForm']);
Route::post('/talleramigo', [CursoController::class, 'storeAmigos'])->name('taller.store-amigos');

Route::get('/calculo-notas', [CursoController::class, 'createNotas']);
Route::post('/calculo-notas', [CursoController::class, 'storeNotas'])->name('taller.store-notas');

Route::get('/calcular-cuadratica', [CursoController::class, 'createCuadratica']);
Route::post('/calcular-cuadratica', [CursoController::class, 'storeCuadratica'])->name('cuadratica.store');
