<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\EodReportController;
use App\Http\Controllers\SynthesesTfjController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Users;
use App\Http\Livewire\Users\Edit;
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

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

//Users

Route::middleware('auth')->group(function(){
    Route::get('users', Users::class)
        ->name('users.index');

    Route::get('user/edit/{id}', Edit::class)
        ->name('users.edit');

    Route::post('user/edit/{id}', [UserController::class, 'store'])
        ->name('users.store');
});

//Banks

Route::middleware('auth') -> group(function(){
    Route::get('banks', [BankController::class, 'index'])
        -> name('banks.index');
    
    Route::get('banks/edit/{bank}', [BankController::class, 'edit'])
        -> name('banks.edit');

    Route::get('banks/add', [BankController::class, 'create'])
        -> name('banks.create');
});

//Reports

Route::middleware('auth') -> group(function(){
    Route::get('reports', [EodReportController::class, 'index'])
        -> name('reports.index');

    Route::get('reports/add', [EodReportController::class, 'create'])
        -> name('reports.create');
    
    Route::get('reports/{eod_report}', [EodReportController::class, 'show'])
        -> name('reports.show');
    
    Route::get('reports/edit/{eod_report}', [EodReportController::class, 'edit'])
        -> name('reports.edit');
});

//EOD Synthesis

Route::middleware('auth') -> group(function(){
    Route::get('synthesis/{report}', [SynthesesTfjController::class, 'create'])
        -> name('tfj.syntesis.create');
});
