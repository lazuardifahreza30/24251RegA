<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

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
Route::get('/posts', [FirebaseController::class, 'index']);
Route::get('/posts/create', [FirebaseController::class, 'create']);
Route::post('/posts', [FirebaseController::class, 'store']);
Route::get('/posts/{id}/edit', [FirebaseController::class, 'edit']);
Route::put('/posts/{id}', [FirebaseController::class, 'update']);
Route::delete('/posts/{id}', [FirebaseController::class, 'destroy']);
