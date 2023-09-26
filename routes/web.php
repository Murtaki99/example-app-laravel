<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashPostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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
// Routes
Route::get('/', function () {
    return view('home', ['title' => 'Home', 'active' => 'home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'active' => 'about']);
});
Route::get('/posts', [PostController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// Route Resource
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::resource('dashboard/posts', DashPostController::class);
