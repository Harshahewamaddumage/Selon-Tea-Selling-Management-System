<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\controllers\authcontroller;

Route::get('/home',[homecontroller::class,'home']);
Route::get('/login',[authcontroller::class,'login']);
Route::get('/register',[authcontroller::class,'register']);
