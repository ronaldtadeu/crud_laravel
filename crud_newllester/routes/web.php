<?php
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

use Illuminate\Support\Facades\Route;

// importa os controllers
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\LoginController;

// rotas relacionadas ao cadastro de newsletter
Route::get('/lista', [NewsletterController::class, 'index']);
Route::get('/', [NewsletterController::class, 'index']);
Route::get('/cadastro', [NewsletterController::class, 'cadastro']);
Route::post('/cadastro/store', [NewsletterController::class, 'store']);

// rotas relacionadas ao login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);
Route::post('/login/logar', [LoginController::class, 'logar']);
