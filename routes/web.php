<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


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

Route::get('/',[TasksController::class,'home']);



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('tasks',[TasksController::class,'index']);
    Route::get('tasks/add',[TasksController::class,'add']);
    Route::post('tasks',[TasksController::class,'create']);
    Route::get('tasks/{id}',[TasksController::class,'edit']);
    Route::put('tasks/{id}',[TasksController::class,'update']);
    Route::delete('tasks/{id}',[TasksController::class,'delete']);
});