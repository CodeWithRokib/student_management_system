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
Route::get('/student',[StudentController::class, 'index'])->name('student.index');
Route::get('/studentAdmission',[StudentController::class, 'create'])->name('student.admission');
Route::post('/studentAdmission',[StudentController::class, 'store'])->name('students.store');

Route::get('/teacher',[TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/create',[TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/create',[TeacherController::class, 'store'])->name('teacher.store');


Route::get('/department',[DepartmentController::class, 'index'])->name('department.index');
Route::get('/department/create',[DepartmentController::class, 'create'])->name('department.create');
Route::post('/department/create',[DepartmentController::class, 'store'])->name('department.store');

Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');
Route::post('/contact',[ContactController::class, 'store'])->name('contact.store');
Route::delete('/contact',[ContactController::class, 'destroy'])->name('contacts.destroy');