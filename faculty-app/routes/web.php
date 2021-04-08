<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Facultycontroller;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\buscontroller;
use App\Http\Controllers\bookcontroller;
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
Route::get('/book', [bookcontroller::class,'create']);
Route::get('/bus', [buscontroller::class,'create']);
Route::get('/Student', [Studentcontroller::class,'create']);
Route::get('/', [Facultycontroller::class,'create']);


Route::post('/Facultyread', [Facultycontroller::class,'store']);
Route::post('/Studentread', [Studentcontroller::class,'store']);
Route::post('/busread', [buscontroller::class,'store']);
Route::post('/bookread', [bookcontroller::class,'store']);

