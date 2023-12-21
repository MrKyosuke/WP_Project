<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
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
// Route::view('/','login')->name('todos.login');

Route::get('/register',[UserController::class, 'register'])->name('user.register');
Route::post('register/userRegister',[UserController::class, 'userRegister'])->name('user.userRegister');
Route::get('/',[UserController::class,'Login'])->name('user.login');
Route::post('/UserLogin',[UserController::class,'UserLogin'])->name('user.UserLogin');
Route::post('/logout', [UserController::class, 'userLogout'])->name('user.UserLogout');

Route::get('todos/index', [TodoController::class, 'index'])->name('todos.index');
Route::get('todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::get('todos/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::post('todos/store', [TodoController::class, 'store'])->name('todos.store');
Route::get('todos/detail/{id}', [TodoController::class, 'detail'])->name('todos.detail');
Route::get('todos/{id}/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::put('todos/update', [TodoController::class, 'update'])->name('todos.update');
Route::delete('todos/remove', [TodoController::class, 'remove'])->name('todos.remove');
Route::put('todos/{id}/toggle-status', [TodoController::class, 'toggleStatus'])->name('todos.toggleStatus');
Route::get('/profile', [UserController::class, 'showProfile'])->name('user.profile');
Route::post('profile/update-password', [UserController::class, 'updatePassword'])->name('todos.profile.updatePassword');
Route::get('/user/settings', [UserController::class, 'settings'])->name('user.settings');

