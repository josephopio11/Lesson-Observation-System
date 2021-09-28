<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('singlelesson/{id}', [LessonController::class, 'singleLesson'])->name('lesson.observed');
Route::get('printlesson/{id}', [LessonController::class, 'printLesson'])->name('lesson.print');
Route::get('downloadlesson/{id}', [LessonController::class, 'downloadLesson'])->name('lesson.download');

Route::resource('lesson', LessonController::class);