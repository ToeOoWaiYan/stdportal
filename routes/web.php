<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
});

Route::get('/register', function() {
    return view('frontend.register.create');
});

Route::get('/authority', function() {
    return view('frontend.authority.view');
})->name('authority');

Route::get('/student',function() {
    return view('frontend.student.view');
})->name('student.view');

Route::get('/student/create',function() {
    return view('frontend.student.create');
})->name('student.create');

Route::get('/employee',function() {
    return view('frontend.employee.view');
})->name('employee.view');

Route::get('/employee/create',function() {
    return view('frontend.employee.create');
})->name('employee.create');