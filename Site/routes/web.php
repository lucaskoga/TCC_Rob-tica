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

Route::get('/', [CadastController::class, 'index']);
Route::get('/tela/cadastroAtividade', [CadastController::class, 'create']);
Route::get('/tela/dashboard/{id}', [CadastController::class, 'show']);
Route::post('/tela', [CadastController::class, 'store']);
Route::get('dashboard', [CadastController::class, 'dashboard']);
