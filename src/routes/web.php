<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  'Illuminate\\Support\\Facades\\Artisan'
*/

Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('/installOrReset', InstallController::class)->name('install');
