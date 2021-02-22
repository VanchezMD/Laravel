<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasagerController;
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

Route::get('/',[PasagerController::class,'index'])->name('index');
Route::post('pasager',[PasagerController::class,'store'])->name('pasager.store');
