<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\LoginController;
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

Route::put('/supports/{id}', [SupportController::class, 'Update'])->name('supports.update');

Route::get('/', [SupportController::class, 'index'])->name('supports.index');

Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

Route::get('/contato', [TestController::class, 'contact'])->middleware('auth');;

Route::post("/insertSupport", [SupportController::class, 'insertSupport'])->name("supports.insertSupport");

Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

Route::prefix('login')->group(function (){
    Route::get('/', [LoginController::class, 'Index'])->name('login.index');
    Route::post('/loginUser', [LoginController::class, 'auth'])->name('login.loginUser');

});
