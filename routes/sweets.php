<?php

use App\Http\Controllers\SweetController;
use Illuminate\Support\Facades\Route;

Route::get('/sweets', [SweetController::class, 'index'])
    ->name('sweets.index');

Route::middleware('can:create,App\Models\Sweet')->group(function ()
{
    Route::get('/sweets/create', [SweetController::class, 'create'])
        ->name('sweets.create');

    Route::post('/sweets', [SweetController::class, 'store'])
        ->name('sweets.store');
});

Route::get('/sweets/{sweet}', [SweetController::class, 'show'])
    ->name('sweets.show')
->middleware('can:view,sweet');

Route::middleware('can:update,sweet')->group(function ()
{
    Route::get('/sweets/{sweet}/edit', [SweetController::class, 'edit'])
        ->name('sweets.edit');

    Route::put('/sweets/{sweet}', [SweetController::class, 'update'])
        ->name('sweets.update');
});

Route::delete('/sweets/{sweet}', [SweetController::class, 'destroy'])
    ->name('sweets.destroy')
    ->middleware('can:delete,sweet');

