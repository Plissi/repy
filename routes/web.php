<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\EodReportController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\PostTFJController;
use App\Http\Controllers\PreTFJController;
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

Route::middleware('auth') -> group(function(){
    //Users
    Route::prefix('users') -> name('users.') -> group(function(){
        Route::get('', Users::class)->name('index');

        Route::get('edit/{id}', Edit::class)->name('edit');

        Route::post('edit/{id}', [UserController::class, 'store'])->name('store');
    });

    //Banks
    Route::prefix('banks') -> name('banks.') -> group(function(){
        Route::get('', [BankController::class, 'index']) -> name('index');   
        
        Route::get('edit/{bank}', [BankController::class, 'edit'])-> name('edit');
        
        Route::get('add', [BankController::class, 'create'])-> name('create');
    });

    //Reports
    Route::prefix('reports') -> name('reports.') -> group(function(){
        Route::get('', [EodReportController::class, 'index'])-> name('index');
    
        Route::get('add', [EodReportController::class, 'create']) -> name('create');
        
        Route::get('show/{eod_report}', [EodReportController::class, 'show'])-> name('show');
        
        Route::get('edit/{eod_report}', [EodReportController::class, 'edit']) -> name('edit');
    });

    //Integration
    Route::prefix('integrations') -> name('integrations.') -> group(function(){
        Route::get('{report}', [IntegrationController::class, 'index']) -> name('index');

        Route::get('add', [IntegrationController::class, 'create']) -> name('create');

        Route::get('edit/{integration}', [IntegrationController::class, 'edit']) -> name('edit');
    });

    Route::prefix('pre-tfj') -> name('pre-tfj.') -> group(function(){
        Route::get('{report}', [PreTFJController::class, 'index']) -> name('index');

        Route::get('add', [PreTFJController::class, 'create']) -> name('create');

        Route::get('edit/{task}', [PreTFJController::class, 'edit']) -> name('edit');
    });

    Route::prefix('post-tfj') -> name('post-tfj.') -> group(function(){
        Route::get('{report}', [PostTFJController::class, 'index']) -> name('index');

        Route::get('add', [PostTFJController::class, 'create']) -> name('create');

        Route::get('edit/{task}', [PostTFJController::class, 'edit']) -> name('edit');
    });
});

//EOD Synthesis

Route::middleware('auth') -> group(function(){
    Route::get('synthesis/{report}', [SynthesesTfjController::class, 'create'])
        -> name('tfj.syntesis.create');
});
