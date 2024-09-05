<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [PageController::class, 'index'])->name('main-page');

Route::get('/register', [PageController::class, 'register'])->name('register-page');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/log', [PageController::class, 'log'])->name('log-page');
Route::post('/log', [UserController::class, 'log'])->name('log');

Route::get('/logout', [PageController::class,"logout"])->name('logout');

Route::get('/course', [PageController::class, 'course'])->name('course-page');

Route::post('/forgot', [PasswordController::class,"forgot"])->name('forgot');
Route::get('/forgot', [PageController::class,"forgot"])->name('forgot-page');

Route::post('/forgotcode', [PasswordController::class,"forgotcode"])->name('forgotcode');
Route::get('/forgotcode', [PageController::class,"forgotcode"])->name('forgotcode-page');

Route::post('/profile', [UserController::class,"profile"])->name('profile');
Route::get('/profile', [PageController::class,"profile"])->name('profile-page');

Route::get('/test', [PageController::class,"test"])->name('test-page');

Route::post('/teach', [AdminController::class,"teach"])->name('teach');
Route::get('/teach', [PageController::class,"teach"])->name('teach-page');

Route::post('/create_new_course', [AdminController::class,"create_new_course"])->name('create_new_course');
Route::get('/create_new_course', [PageController::class,"create_new_course"])->name('create_new_course-page');

Route::post('/', [AdminController::class,"delete"])->name('delete');

Route::post('/course', [AdminController::class,"deletelanguage"])->name('deletelanguage');

Route::get('/feedback', [PageController::class,"feedback"])->name('feedback');
Route::post('/feedback', [UserController::class,"feedback"])->name('feedback-post');

Route::post('/create_new_language', [AdminController::class,"create_new_language"])->name('create_new_language');
Route::get('/create_new_language', [PageController::class,"create_new_language"])->name('create_new_language-page');

Route::post('/change', [UserController::class,"change"])->name('change');

Route::post('/get', [UserController::class,"get"])->name('get');

Route::post('/nwaf', [AdminController::class,"newquest"])->name('newquest');

Route::post('/deletefeedback', [AdminController::class,"deletefeedback"])->name('deletefeedback');
