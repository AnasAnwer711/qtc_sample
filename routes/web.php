<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('clients.index');
    })->name('dashboard');

    Route::prefix('clients')->name('clients.')->group(function () {
        Route::get('', [ClientController::class, 'index'])->name('index');
        Route::get('create', [ClientController::class, 'create'])->name('create');
        Route::post('store/{id?}', [ClientController::class, 'store'])->name('store');
        Route::get('update/{id}', [ClientController::class, 'update'])->name('update');
    });

});
