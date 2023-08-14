<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SupportController;

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
    return view('welcome');
});

Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [TestController::class, 'contact']);

Route::post("/insertSupport", [SupportController::class, 'insertSupport'])->name("supports.insertSupport");

Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
