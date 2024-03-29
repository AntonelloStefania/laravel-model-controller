<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController as Pagecontroller;

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

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::get('/comic/{id}', [PageController::class, 'comic'])->name('comic');