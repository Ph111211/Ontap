<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCOntroller;

Route::get('/', [ProductCOntroller::class,'index'])->name('index');
Route::get('/create', [ProductCOntroller::class,'create'])->name('create');
Route::get('/edit/{id}', [ProductCOntroller::class,'edit'])->name('edit');
Route::put('/update/{id}', [ProductCOntroller::class,'update'])->name('update');

Route::delete('/destroy/{id}', [ProductCOntroller::class,'destroy'])->name('destroy');
Route::post('/store', [ProductCOntroller::class,'store'])->name('store');