<?php

use App\Http\Controllers\CrudController;
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

Route::get( '/' , [CrudController::class , 'show'])->name('home');
Route::get( '/create' , [CrudController::class , 'create'])->name('create.user');
Route::post('/store' , [CrudController::class , 'store'])->name('store.user');
Route::post( '/edit/{id}' , [CrudController::class , 'edit'])->name('edit.user');
Route::post('/update/{id}' , [CrudController::class , 'update'])->name('update.user');
Route::delete('/delete/{id}' , [CrudController::class , 'destroy'])->name('delete.user');