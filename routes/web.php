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

use App\http\Controllers\Envento;

Route::get('/', [Envento::class, 'welcome']);
Route::get('/hamilton', [Envento::class, 'hamilton']);
Route::get('/alunos/view', [Envento::class, 'viewAlunos']);
Route::get('/acao', [Envento::class, 'acao']);
Route::get('/alunos/create', [Envento::class, 'AlunoCreate']);
Route::post('/alunos', [Envento::class, 'store']);
Route::post('/cursos', [Envento::class, 'storeTbCursos']);
Route::get('/cursos/view', [Envento::class, 'viewCursos']);
Route::get('/cursos/create', [Envento::class, 'cursosCreate']);
