<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\PostController;
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

Route::resource('posts', PostController::class);
Route::get('/', [PostController::class, 'index']);

Route::get('/export/excel', [ExportController::class, 'excel'])->name('export.excel');
Route::get('/export/pdf/{id}', [ExportController::class, 'pdf'])->name('export.pdf');
Route::get('/export/stream-pdf/{id}', [ExportController::class, 'streamPDF'])->name('export.stream-pdf');
