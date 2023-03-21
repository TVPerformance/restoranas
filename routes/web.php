<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestController as R;
use App\Http\Controllers\DishController as D;

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
Route::prefix('admin/rests')->name('rests-')->group(function () {
    Route::get('/', [R::class, 'index'])->name('index');
    Route::get('/create', [R::class, 'create'])->name('create'); //->middleware('roles:A|M');
    Route::post('/create', [R::class, 'store'])->name('store');
    Route::get('/edit/{rest}', [R::class, 'edit'])->name('edit');
    Route::put('/edit/{rest}', [R::class, 'update'])->name('update');
    Route::delete('/delete/{rest}', [R::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/dishs')->name('dishs-')->group(function () {
    Route::get('/', [D::class, 'index'])->name('index');
    // Route::get('/show/{dish}', [D::class, 'show'])->name('show');
    // Route::get('/pdf/{dish}', [D::class, 'pdf'])->name('pdf');
    Route::get('/create', [D::class, 'create'])->name('create');
    Route::post('/create', [D::class, 'store'])->name('store');
    Route::get('/edit/{dish}', [D::class, 'edit'])->name('edit');
    Route::put('/edit/{dish}', [D::class, 'update'])->name('update');
    Route::delete('/delete/{dish}', [D::class, 'destroy'])->name('destroy');
});

Route::get('/', [F::class, 'home'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
