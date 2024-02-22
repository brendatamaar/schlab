<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\CalendarPage;
use App\Http\Controllers\pages\ClassPage;
use App\Http\Controllers\pages\GradePage;
use App\Http\Controllers\pages\AssignmentPage;
use App\Http\Controllers\pages\AttendancePage;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;

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

// Main Page Route
Route::get('/page-calendar', [CalendarPage::class, 'index'])->name('pages-page-calendar');
Route::get('/page-class', [ClassPage::class, 'index'])->name('pages-page-class');
Route::get('/page-grade', [GradePage::class, 'index'])->name('pages-page-grade');
Route::get('/page-assignment', [AssignmentPage::class, 'index'])->name('pages-page-assignment');
Route::get('/page-attendance', [AttendancePage::class, 'index'])->name('pages-page-attendance');

// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// pages
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::get('/', [HomePage::class, 'index'])->name('pages-home');
});
