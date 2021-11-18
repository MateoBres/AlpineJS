<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MediaController;

Route::get('/', function () { return view('welcome'); });

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    ################################  PAGES  ###########################################
    Route::get('/page/show',[PageController::class, 'index'])->name('page-show');
    Route::get('/page/create',[PageController::class, 'create'])->name('page-create');
    Route::post('/page/create',[PageController::class, 'store']);
    Route::get('/page/edit/{slug}',[PageController::class, 'edit'])->name('page-edit');
    Route::put('/page/edit/{slug}',[PageController::class, 'update']);
    Route::get('/page/delete/{slug}',[PageController::class, 'confirmDelete']);
    Route::delete('/page/delete/{slug}',[PageController::class, 'destroy']);

    ################################  POSTS  ###########################################
    Route::get('/post/show',[PostController::class, 'index'])->name('post-show');
    Route::get('/post/create',[PostController::class, 'create'])->name('post-create');
    Route::post('/post/create',[PostController::class, 'store']);
    Route::get('/post/edit/{id}',[PostController::class, 'edit'])->name('post-edit');
    Route::put('/post/edit/{id}',[PostController::class, 'update']);
    Route::get('/post/delete/{id}',[PostController::class, 'confirmDelete'])->name('post-delete');
    Route::delete('/post/delete/{id}',[PostController::class, 'destroy']);

    ################################  MEDIA  ###########################################
    Route::get('/media/show',[MediaController::class, 'index'])->name('media-show');
    Route::get('/media/create',[MediaController::class, 'create'])->name('media-create');
    Route::post('/media/create',[MediaController::class, 'store']);
    Route::get('/media/edit/{id}',[MediaController::class, 'edit'])->name('media-edit');
    Route::put('/media/edit/{id}',[MediaController::class, 'update']);
    Route::get('/media/delete/{id}',[MediaController::class, 'confirmDelete'])->name('media-delete');
    Route::delete('/media/delete/{id}',[MediaController::class, 'destroy']);

    ################################  COMPANIES  ###########################################
    Route::get('/company/show',[CompanyController::class, 'index'])->name('company-show');
    Route::get('/company/create',[CompanyController::class, 'create'])->name('company-create');
    Route::post('/company/create',[CompanyController::class, 'store']);
    Route::get('/company/edit/{id}',[CompanyController::class, 'edit'])->name('company-edit');
    Route::put('/company/edit/{id}',[CompanyController::class, 'update']);
    Route::get('/company/delete/{id}',[CompanyController::class, 'confirmDelete'])->name('company-delete');
    Route::delete('/company/delete/{id}',[CompanyController::class, 'destroy']);
});


