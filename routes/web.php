<?php

use App\Livewire\Admin\Configuration;
use App\Livewire\Admin\Panel;
use App\Livewire\Site\Layout\Homepage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', Homepage::class)->name('homepage');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/configurações-da-página', Configuration::class)->name('configuration');
    Route::get('/dashboard', Panel::class)->name('dashboard');
});
