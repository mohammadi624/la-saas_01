<?php

use App\Modules\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/account/profile', [ProfileController::class, 'edit'])->middleware('sazeh')->name('profile.edit');
Route::put('/account/profile', [ProfileController::class, 'update'])->middleware('sazeh.context')->name('profile.update');
