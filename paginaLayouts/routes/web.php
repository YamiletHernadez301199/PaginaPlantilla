<?php

use App\Http\Controllers\Paginas;
use Illuminate\Support\Facades\Route;

Route::get('/',[Paginas::class,'index'])->name('proyecto1-index');
//nombres de rutas

