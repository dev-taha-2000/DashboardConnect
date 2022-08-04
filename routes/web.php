<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  
// Route::get('/formation', [App\Http\Controllers\FormationController::class, 'index']);   
// Route::get('/formation/create', [App\Http\Controllers\FormationController::class, 'create']);    
// Route::post('/formation.store', [App\Http\Controllers\FormationController::class, 'store']);       