<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ProjetController; 
use App\Http\Controllers\StaffController; 
use App\Http\Controllers\ContactController; 
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
    return view('auth/login'); 
});  

Auth::routes();
Route::resource('/formation', FormationController::class); 
Route::resource('/staff', StaffController::class);   
Route::resource('/projet', ProjetController::class);  
Route::resource('/contact', ContactController::class);  
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');        