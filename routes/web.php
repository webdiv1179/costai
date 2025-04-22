<?php

use App\Http\Controllers\AcitvityLogController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//

    Route::middleware(['auth:web','LogUserActivity'])->group(function () {

        Route::get('/', [AdminIndexController::class, 'index'])
            ->name('Cms.index');

            Route::get('/accounts', [AdminIndexController::class, 'accountss'])
            ->name('accountss.index');


        Route::resource('ActivityLog', AcitvityLogController::class)->names([
            'index' => 'ActivityLog.index',
            'create' => 'ActivityLog.create',
            'store' => 'ActivityLog.store',
            'show' => 'ActivityLog.show',
            'edit' => 'ActivityLog.edit',
            'update' => 'ActivityLog.update',
            'destroy' => 'ActivityLog.destroy',
        ]);
        Route::get('Users', [UserController::class, 'index'])
        ->name('Users.index');


    });

    Route::get('/contact', function () {
        return view('LandingPage.contactUs');
    })->name('contact');


    Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')->name('admin.logout');

    Route::group(['middleware' => ['guest:web']], function () {
        Route::get('login', [LoginController::class, 'showlogin'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('admin.login');
        Route::post('register', [LoginController::class, 'register'])->name('admin.register');





});


