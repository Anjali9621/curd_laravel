<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\categoryController;
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


Route::get('/',[categoryController::class,'index']);

Route::get('/categroy.create',[categoryController::class,'create']);

Route::post('/category.store',[categoryController::class,'store']);

Route::get('/category.edit/{id}',[categoryController::class,'edit']);

Route::put('/category.update/{id}',[categoryController::class,'update']);

Route::delete('/category.delete/{id}',[categoryController::class,'destroy']);

