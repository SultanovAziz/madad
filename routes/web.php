<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\HomeController;



Route::get('/',[HomeController::class,'index']);
