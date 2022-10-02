<?php

use App\Http\Livewire\Pages\AboutController;
use App\Http\Livewire\Pages\BlogController;
use App\Http\Livewire\Pages\BlogSingleController;
use App\Http\Livewire\Pages\ContactController;
use App\Http\Livewire\Pages\HomeController;
use App\Http\Livewire\Pages\PortfolioController;
use App\Http\Livewire\Pages\PortfolioSingleController;
use App\Http\Livewire\Pages\ServiceController;
use App\Http\Livewire\Pages\ServiceSingleController;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
/* Route::get('/service', ServiceController::class)->name('service'); */
Route::get('/contact', ContactController::class)->name('contact');

Route::prefix('service')->as('service')->group(function(){
    Route::get('/', ServiceController::class)->name('index'); //route('api:v1:category:index');
    Route::get('{service:slug}', ServiceSingleController::class)->name('show'); //route('api:v1:category:store');
});

Route::prefix('post')->as('post')->group(function(){
    Route::get('/', BlogController::class)->name('index'); //route('api:v1:category:index');
    Route::get('{post:slug}', BlogSingleController::class)->name('show'); //route('api:v1:category:store');
});

Route::prefix('portfolio')->as('portfolio')->group(function(){
    Route::get('/', PortfolioController::class)->name('index'); //route('api:v1:category:index');
    Route::get('{portfolio:slug}', PortfolioSingleController::class)->name('show'); //route('api:v1:category:store');
});
