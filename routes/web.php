<?php

use App\Livewire\Admin\Configuration;
use App\Livewire\Admin\ListUser;
use App\Livewire\Admin\Panel;
use App\Livewire\Admin\SocialMedia;
use App\Livewire\Site\Layout\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    Route::get('/configurações-da-página', Configuration::class)
        ->name('configuration')
        ->middleware('admin.access');

    Route::get('/dashboard', Panel::class)->name('dashboard');
    Route::get('/usuários', ListUser::class)
        ->name('list-users')
        ->middleware('admin.access');

    Route::get('/mídias-sociais', SocialMedia::class)->name('social-media');

    Route::post('/upload-editor',function(Request $request){
        $file = $request->file('file');
        $url = $file->store('public', 'uploads');
        return Storage::url($url);
    })->name('upload-editor');
});
