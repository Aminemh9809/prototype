<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContributionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
    Route::post('/projects/{project}/contribute', [ContributionController::class, 'store'])->name('contributions.store');
});


require __DIR__.'/auth.php';
