<?php

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

use App\Http\Controllers\CadastController;
use App\Http\Controllers\InstController;

Route::get('/', [CadastController::class, 'index']);
Route::get('/tela/cadastroAtividade', [CadastController::class, 'create']);
Route::get('/tela/dashboard/{id}', [CadastController::class, 'show']);
Route::post('/tela/cadastroAtividade', [CadastController::class, 'store']);
Route::get('dashboard', [CadastController::class, 'dashboard']);
Route::get('/tela/cadastroInstituicao', [InstController::class, 'create']);
Route::post('/tela/cadastroInstituicao', [InstController::class, 'store']);
