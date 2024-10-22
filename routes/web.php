<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [InstructorController::class, 'index']);
Route::get('/search', [InstructorController::class, 'search'])->name('instructors.search');
Route::get('/filter', [InstructorController::class, 'filter'])->name('instructors.filter');
