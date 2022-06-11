<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/public/welcome',[PageController::class,'welcome'])->name('public.welcome');
Route::get('/public/create',[PageController::class,'create'])->name('public.create');
Route::post('/public/create',[PageController::class,'createSubmit'])->name('public.create.submit');
Route::get('/public/dashboard',[PageController::class,'dashboard'])->name('public.dashboard');