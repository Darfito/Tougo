<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CustomerController;

// use App\Http\Controllers\RegController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'landing']);
// login and register route
// Route::get('/register', [RegController::class, 'index']);
// Route::post('/register', [RegController::class, 'create']);
Route::post('/register', [RegisterController::class, 'create']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/logout',    [LoginController::class, 'logout']);
Route::get('/login',    [LoginController::class, 'index'])->middleware('guest');
Route::post('/login',    [LoginController::class, 'authenticate']);
// about us, stories, and destination route
Route::get('/stories', [MainController::class, 'stories']);
Route::get('/destination', [MainController::class, 'destination']);
Route::get('/aboutus', [MainController::class, 'aboutus']);

// profile
Route::get('/profile', [MainController::class, 'profile']);

// admin route
// Route::middleware('admin')->group(function(){
// });
Route::get('/dash',    [MainController::class, 'dashboard'])->middleware('admin');
Route::get('/dashCus', [CustomerController::class, 'index'])->middleware('admin');
Route::get('/dashSto', [StoriesController::class, 'index'])->middleware('admin');
Route::get('/dashDes', [DestinationController::class, 'index'])->middleware('admin');

// edit create nya destination
Route::get('/dashCreate', function () {
    return view('admin.createdes');
});
Route::get('/dashEdit', function () {
    return view('admin.editdes');
});

// edit create nya stories
Route::get('/dashCreateSt', function () {
    return view('admin.createst');
});
Route::get('/dashEditSt', function () {
    return view('admin.editst');
});

// layout route
Route::get('/main', function () {
    return view('layouts.main');
});
Route::get('/app', function () {
    return view('layouts.app');
});


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Show all records
// Route::get('/', [DestinationController::class, 'index']);


//Destination
// Show the form to create a new record
Route::get('/create', [DestinationController::class, 'create']);

// Store a new record
Route::post('/store', [DestinationController::class, 'store']);

// Show the form to edit an existing record
Route::get('/edit/{id}', [DestinationController::class, 'edit']);

// Update an existing record
Route::put('/update/{id}', [DestinationController::class, 'update']);

// Delete an existing record
Route::delete('/delete/{id}', [DestinationController::class, 'destroy']);
// Show the form to create a new record

//stories
Route::get('/createsto', [StoriesController::class, 'create']);

// Store a new record
Route::post('/storesto', [StoriesController::class, 'store']);

// Show the form to edit an existing record
Route::get('/editsto/{id}', [StoriesController::class, 'edit']);

// Update an existing record
Route::put('/updatesto/{id}', [StoriesController::class, 'update']);

// Delete an existing record
Route::delete('/deletesto/{id}', [StoriesController::class, 'destroy']);
