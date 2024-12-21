<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

Route::get('/home',[homecontroller::class,'home']);
