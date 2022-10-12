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



Route::get('/', HomeController::class)->name('home')->middleware('visitor');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');

Route::middleware('visitor')->prefix('service')->as('service')->group(function(){
    Route::get('/', ServiceController::class)->name('index');
    Route::get('{service:slug}', ServiceSingleController::class)->name('show');
});

Route::middleware('visitor')->prefix('post')->as('post')->group(function(){
    Route::get('/', BlogController::class)->name('index');
    Route::get('{post:slug}', BlogSingleController::class)->name('show');
});

Route::middleware('visitor')->prefix('portfolio')->as('portfolio')->group(function(){
    Route::get('/', PortfolioController::class)->name('index');
    Route::get('{portfolio:slug}', PortfolioSingleController::class)->name('show');
});
