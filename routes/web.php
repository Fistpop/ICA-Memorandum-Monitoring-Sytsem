<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemorandumController;
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

Auth::routes();
Route::get('/users', [jeremykenedy\laravelusers\app\Http\Controllers\UsersManagementController::class, 'index'])->name('users');
Route::get('/home', [MemorandumController::class, 'index']);

Route::post('/creatememorandum', [MemorandumController::class, 'store']);
Route::get('/creatememo', [MemorandumController::class, 'create']);
Route::get('/showmemorandum', [MemorandumController::class, 'index']);
Route::get('/managememorandum', [MemorandumController::class, 'manage']);
Route::get('/showmemo/{id}', [MemorandumController::class, 'show']);
Route::get('/editmemorandum/{id}', [MemorandumController::class, 'edit']);
Route::post('/edit/{id}', [MemorandumController::class, 'update']);
Route::get('/deletememorandum/{id}', [MemorandumController::class, 'destroy']);