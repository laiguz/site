<?php

use App\Livewire\Admin\Articles\ArticleCategory;
use App\Livewire\Admin\Articles\Article;
use App\Livewire\Admin\Articles\ArticleGallery;
use App\Livewire\Admin\Articles\ArticleNew;
use App\Livewire\Admin\Articles\ArticleUpdate;
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
        ->name('list-users');

    Route::get('/mídias-sociais', SocialMedia::class)
        ->name('social-media')
        ->middleware('admin.access');

    //Bloco Artigos
        Route::get('/artigos', Article::class)
            ->name('articles');
        Route::get('/artigos/artigo-novo', ArticleNew::class)
            ->name('articles.new');
        Route::get('/artigos/{articles:slug}', ArticleUpdate::class)
            ->name('articles.update');
        Route::get('/artigos/galeria/{articles:slug}', ArticleGallery::class)
            ->name('gallery-articles');
        Route::get('/categorias-de-artigos', ArticleCategory::class)
            ->name('category-articles');
    //Bloco Artigos

    Route::post('/upload-editor',function(Request $request){
        $file = $request->file('file');
        $url = $file->store('public/uploads');
        return Storage::url($url);
    })->name('upload-editor');
});
