<?php

use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MechanicController;

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

Route::get('student/add/{id}',[StudentController::class,'add'])->name('student.add');
Route::post('student/add/{id}',[StudentController::class,'store'])->name('student.store');
Route::get('/show',[StudentController::class,'index'])->name('student.show');
Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/update/{id}',[StudentController::class,'update'])->name('student.update');

Route::get('/shows',[MechanicController::class,'index'])->name('mechanics.shows');
Route::get('/showss',[PostController::class,'index'])->name('posts.showss');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return "This is admin";
    });
});


Route::get('test_mail',[App\Http\Controllers\UserController::class,'testmail']);
Route::get('event',[App\Http\Controllers\UserAuth::class,'index']);


// //Order Routes
Route::get('orders', [OrderController::class, 'index']);
Route::get('orders/{id}', [OrderController::class, 'show']);
Route::post('orders', [OrderController::class, 'store']);
Route::put('orders/{id}', [OrderController::class, 'update']);
Route::delete('orders/{id}', [OrderController::class, 'delete']);