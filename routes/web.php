<?php

use App\Http\Controllers\CategoryParentController;
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

Route::get('/', [CategoryParentController::class, 'index'])->name('category_parent.index');
Route::get('create', [CategoryParentController::class, 'create'])->name('category_parent.create');
Route::post('store', [CategoryParentController::class, 'store'])->name('category_parent.store');
Route::post('get-name', [CategoryParentController::class, 'getCategoryName'])->name('category_parent.getCategoryName');
