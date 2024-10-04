<?php

use App\Models\Blogging;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BloggingController;
// use App\Blogging;
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


Route::get('/', [BloggingController::class, 'index']);

//create post

Route::get('blogging/create', [BloggingController::class, 'create'])->middleware('auth');

//store
Route::post('/blogging', [BloggingController::class, 'store'])->middleware('auth');


//edit post

Route::get('blogging/{blog}/edit', [BloggingController::class, 'edit'])->middleware('auth');

    //update store


Route::put('/blogging/{blog}', [BloggingController::class, 'update'])->middleware('auth');



//delete 

Route::delete('/blogging/{blog}', [BloggingController::class, 'destroy'])->middleware('auth');



// manage


Route::get('/manage', [BloggingController::class, 'manage'])->middleware('auth');;




//single pagge

Route::get('/blogging/{blog}', [BloggingController::class,'show']);

//update 




// User authentication 

// Create user 

Route::get('/register', [UserController::class, 'create'])->middleware('guest');


//store registered user 

Route::post('/users', [UserController::class, 'store']);

// logout user 

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');




//show login form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login user 

Route::post('/users/authenticate', [UserController::class, 'authenticate']);



//about 


Route::get('/about',[BloggingController::class, 'about']);


Route::get('/contact', [BloggingController::class, 'contact']);



