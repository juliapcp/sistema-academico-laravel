<?php

use App\Http\Controllers\Disciplina;
use App\Http\Controllers\Aluno;
use App\Http\Controllers\Professor;
use App\Http\Controllers\Index;
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


Route::get('/',  [Index::class, 'index']);

Route::get('/disciplina',  [Disciplina::class, 'listagem']);
Route::get('/disciplina/inserir',  [Disciplina::class, 'mostraInserir']);
Route::post('insereDisciplina',  'App\Http\Controllers\Disciplina@inserir');

Route::get('/aluno',  [Aluno::class, 'listagem']);
Route::get('/aluno/inserir',  [Aluno::class, 'mostraInserir']);
Route::post('insereAluno',  'App\Http\Controllers\Aluno@inserir');

Route::get('/professor',  [Professor::class, 'listagem']);
Route::get('/professor/inserir',  [Professor::class, 'mostraInserir']);
Route::post('insereProfessor',  'App\Http\Controllers\Professor@inserir');
