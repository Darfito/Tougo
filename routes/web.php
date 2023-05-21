<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DestinationController;
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

Route::get('/', function () {
    return view('landing', [
        "title" => "Welcome!"
    ]);
});
// login and register route
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
// about us, stories, and destination route
Route::get('/stories', function () {
    return view('stories',[
        "title" => "stories"
    ] );
});
Route::get('/destination', function () {
    return view('destination', [
        "title" => "destination"
    ]);
});
Route::get('/aboutus', function () {
    return view('aboutus',[
        "title" => "about us"
    ]);
});

// profile
Route::get('/profile', function () {
    return view('account.profile');
});

// admin route
Route::get('/dashSto', function () {
    return view('admin.dashboardst');
});
Route::get('/dashDes', [DestinationController::class, 'index']);

Route::get('/dashCreate', function () {
    return view('admin.createdes');
});
Route::get('/dashEdit', function () {
    return view('admin.editdes');
});

// layout route
Route::get('/main', function () {
    return view('layouts.main');
});
Route::get('/app', function () {
    return view('layouts.app');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Show all records
// Route::get('/', [DestinationController::class, 'index']);

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