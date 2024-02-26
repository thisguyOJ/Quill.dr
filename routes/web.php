<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuillController;

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

Route::get('/', [QuillController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('quill');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('quill', [QuillController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('quill');

require __DIR__.'/auth.php';
