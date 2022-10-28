<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user-dashboard', function () {
    return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

 

Route::get('/users', [UserController::class, 'index'])->middleware(['auth'])->name('fetch_users');
Route::patch('/updateUser-role', [UserController::class, 'updateUserRole'])->middleware(['auth']);
Route::patch('/resetPassword', [UserController::class, 'updatePassword'])->middleware(['auth']);

Route::post('/enable-users', [UserController::class, 'enableUsers'])->middleware(['auth']);
Route::post('/disable-users', [UserController::class, 'disableUsers'])->middleware(['auth']);
Route::get('/settings', [profileController::class, 'index'])->middleware(['auth']);
Route::post('/save-profile', [profileController::class, 'updateProfile'])->middleware(['auth']);

Route::get('/books', [BooksController::class, 'index'])->middleware(['auth']);
Route::post('/add-book', [BooksController::class, 'addbooks'])->name('addbooks')->middleware(['auth']);
Route::post('/update-book', [BooksController::class, 'update'])->name('updatebooks')->middleware(['auth']);

require __DIR__.'/auth.php';
