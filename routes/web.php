<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('auth.login');
});*/

Route::resource('courses','App\Http\Controllers\CourseController');

Route::resource('contents','App\Http\Controllers\ContentController');

Route::resource('teachers','App\Http\Controllers\TeacherController');

Route::resource('places','App\Http\Controllers\PlaceController');


/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
