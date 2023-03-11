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

use App\Http\Controllers\QuoteController;

Route::get('/',[QuoteController::class, 'comeco']);

Route::get('/meus_quotes/create', [QuoteController::class, 'create'])->middleware('auth');

Route::post('/produtos', [QuoteController::class,'store']);

Route::get('/contas/{id}',[QuoteController::class,'show']);

Route::delete('/contas/delete/{id}', [QuoteController::class,'deletar'])->middleware('auth');;

Route::get('/contas/edit/{id}', [QuoteController::class,'editar'])->middleware('auth');;

Route::put('/contas/update/{id}', [QuoteController::class,'upd'])->middleware('auth');;










Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[QuoteController::class, 'index']) ->name('dashboard');
});
