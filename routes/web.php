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
    return view('landing');
});
Route::get('/main', function () {
    return view('layouts.main');
});
Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/destination', function () {
    return view('destination');
});
Route::get('/stories', function () {
    return view('stories');
});
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