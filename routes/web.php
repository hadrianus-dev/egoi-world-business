<?php

use App\Http\Livewire\Pages\AboutController;
use App\Http\Livewire\Pages\ContactController;
use App\Http\Livewire\Pages\HomeController;
use App\Http\Livewire\Pages\PortfolioController;
use App\Http\Livewire\Pages\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/service', ServiceController::class)->name('service');
Route::get('/portifolio', PortfolioController::class)->name('portifolio');
Route::get('/contact', ContactController::class)->name('contact');
