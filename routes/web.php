<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ContactController;

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
    return view('frontend.home.home');
})->name('home');
Route::get('/events', function () {
    return view('frontend.events.index');
})->name('event');
Route::get('/gallery', function () {
    return view('frontend.gallery.index');
})->name('gallery');

Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->name('dashboard');

Route::resource('students',StudentController::class);
Route::resource('teachers',TeacherController::class);
Route::resource('departments',DepartmentController::class);



Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');
Route::post('/contact',[ContactController::class, 'store'])->name('contact.store');
Route::delete('/contact',[ContactController::class, 'destroy'])->name('contacts.destroy');
