<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group. Make something great!
|
*/

// Standard Laravel authentication routes
Auth::routes();

// Redirect the base URL to the dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Home route (you may remove or repurpose this if not needed)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Group for authenticated routes
Route::middleware(['auth'])->group(function () {
    // Dashboard route accessible only for authenticated users
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    // Add other authenticated routes here
});
