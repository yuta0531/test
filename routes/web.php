<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () { return view('welcome'); }); //初期からあるヤツ


Route::get('/',[PostController::class, 'index']);   
Route::get('/posts/create',[PostController::class, 'create']);
Route::get('/posts/{post}',[PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);