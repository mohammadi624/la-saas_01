<?php

use App\Modules\Panels\PanelController;
use Illuminate\Support\Facades\Route;

/*
| آدرس‌ها زیر پیشوند پنل مالک سایت (پیش‌فرض /admin):
|   /admin/panels            فهرست
|   /admin/panels/create     فرم پنل جدید
|   /admin/panels/{id}/edit  فرم ویرایش
| صفحه‌ها (GET) ← 'sazeh'  :  ورود + بخش معتبر + دسترسی صفحه (از PanelsModule::pages)
| عملیات       ← 'sazeh.can:panels.manage'
*/
Route::prefix(config('sazeh.panels.platform.prefix', 'admin').'/panels')->name('panels.')->group(function () {
    Route::middleware('sazeh')->group(function () {
        Route::get('/', [PanelController::class, 'index'])->name('index');
        Route::get('/create', [PanelController::class, 'create'])->name('create');
        Route::get('/{panel}/edit', [PanelController::class, 'edit'])->whereNumber('panel')->name('edit');
    });

    Route::middleware(['sazeh.context', 'sazeh.can:panels.manage'])->group(function () {
        Route::post('/', [PanelController::class, 'store'])->name('store');
        Route::put('/{panel}', [PanelController::class, 'update'])->whereNumber('panel')->name('update');
        Route::post('/{panel}/toggle', [PanelController::class, 'toggle'])->whereNumber('panel')->name('toggle');
        Route::delete('/{panel}', [PanelController::class, 'destroy'])->whereNumber('panel')->name('destroy');
    });
});
