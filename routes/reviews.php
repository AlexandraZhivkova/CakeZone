<?php


use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/reviews', [ReviewController::class, 'index'])
    ->name('reviews.index');

Route::middleware('can:create,App\Models\Review')->group(function () {
    Route::get('/reviews/create', [ReviewController::class, 'create'])
        ->name('reviews.create');

    Route::post('/reviews', [ReviewController::class, 'store'])
        ->name('reviews.store');
});

Route::get('/reviews/{review}', [ReviewController::class, 'show'])
    ->name('reviews.show')
    ->middleware('can:view,review');

Route::middleware('can:update,review')->group(function () {
    Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])
        ->name('reviews.edit');

    Route::put('/reviews/{review}', [ReviewController::class, 'update'])
        ->name('reviews.update');
});

Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])
    ->name('reviews.destroy')
    ->middleware('can:delete,review');


