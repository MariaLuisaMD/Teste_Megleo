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

Route::get('/', [QuoteController::class, 'index']);

Route::get('/meus_quotes/create', [QuoteController::class, 'create']);

Route::post('/produtos', [QuoteController::class,'store']);



Route::get('/perfil', [QuoteController::class, 'perfil']);







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
