<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', App\Livewire\Portfolio\Home::class)->name('home');
Route::get('/showcase', App\Livewire\Portfolio\Showcase::class)->name('showcase');
Route::get('/showcase/{slug}', App\Livewire\Portfolio\ProjectDetail::class)->name('project-detail');
Route::get('/contact', App\Livewire\Portfolio\ContactForm::class)->name('contact');
