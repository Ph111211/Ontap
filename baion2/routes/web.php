<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'index'])->name('index');
Route::get('/create', [StudentController::class,'create'])->name('create');
Route::get('/edit/{id}', [StudentController::class,'edit'])->name('edit');
Route::put('/update/{id}', [StudentController::class,'update'])->name('update');

Route::delete('/destroy/{id}', [StudentController::class,'destroy'])->name('destroy');
Route::post('/store', [StudentController::class,'store'])->name('store');