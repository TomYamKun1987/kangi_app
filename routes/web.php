<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\StudentsController;

use App\Http\Controllers\StudentBlogsController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/top', function(){
    return view('top');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/students', [StudentsController::class, 'index'])->name('students.index');

Route::get('/studentBlogs', [StudentBlogsController::class, 'index'])->name('studentBlogs.index');

Route::post('/studentBlogs', [StudentBlogsController::class, 'store'])->name('studentBlogs.store');
