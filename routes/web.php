<?php

use App\Http\Controllers\auth\AccountDeletionController;
use App\Http\Controllers\auth\PasswordController;
use App\Http\Controllers\auth\ProfileController;
use App\Http\Controllers\view\ViewController;
use Illuminate\Support\Facades\Route;


Route::controller(ViewController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/job-list', 'jobList')->name('job-list');
    Route::get('/job-detail', 'jobDetail')->name('job-detail');
    Route::get('/contact', 'contact')->name('contact');
});
// Route::get('/', function () {
//     return view('welcome');
// })->name('home')->middleware('verified');

Route::get('account-delete', [AccountDeletionController::class, 'index'])->name('account.delete');
Route::post('account-delete', [AccountDeletionController::class, 'destroy']);
Route::get('profile-update', [ProfileController::class, 'index'])->name('profile.update');
Route::get('auth-password', [PasswordController::class, '__invoke'])->name('auth.password');
