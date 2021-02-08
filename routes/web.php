<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Employee;
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
Route::get('/page/show', [PageController::class,'showOne'])->name('showOne');
Route::get('/page/all', [PageController::class,'showAll'])->name('showAll');
Route::get('employee/all', [Employee::class,'showAll'])->name('employee.showAll');
Route::get('employee/{id}', [Employee::class,'showOne'])->name('employee.showOne');
