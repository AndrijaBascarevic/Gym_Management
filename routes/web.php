<?php

use App\Http\Controllers\NewMemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [NewMemberController::class, 'index']);

Route::post('/member', [NewMemberController::class, 'Create']);

Route::post('/ispis', [NewMemberController::class,'show']);

Route::view('/', 'index')->name('index');

Route::view('/member', 'member')->name('member');