<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('edits', function () {
    return view('categories.edits');
});

// Route::get('categories', [CategoryController::class, 'index']);
// Route::get('create', [CategoryController::class, 'create']);
// Route::get('store', [CategoryController::class, 'store']);

Route::resource('categories', CategoryController::class);

Route::resource('posts', PostController::class);

// Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('index');
})->name('index');
