<?php

use Illuminate\Support\Facades\Route;
use Saas\PlatformConfig\Http\Controllers\Admin\PlatformConfigController;

Route::prefix(config('platform-config.route_prefix', 'admin/platform-config'))
    ->middleware(config('platform-config.middleware', ['web', 'auth']))
    ->name('admin.platform-config.')
    ->group(function () {
        Route::get('/', [PlatformConfigController::class, 'index'])->name('index');
        Route::put('/settings/{group}', [PlatformConfigController::class, 'updateSettings'])->name('settings.update');
        Route::post('/settings/{group}/reset', [PlatformConfigController::class, 'resetGroup'])->name('settings.reset');
        Route::put('/registration-policy', [PlatformConfigController::class, 'updateRegistrationPolicy'])->name('registration-policy.update');
        Route::post('/billing/preview', [PlatformConfigController::class, 'previewBilling'])->name('billing.preview');
        Route::get('/export', [PlatformConfigController::class, 'exportMasked'])->name('export');
    });
