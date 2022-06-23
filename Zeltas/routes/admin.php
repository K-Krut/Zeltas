<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;


Route::middleware("guest:admin")->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login_process', [AuthController::class, 'login'])->name('login_process');
});

Route::middleware("auth:admin")->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('index', [AuthController::class, 'index_red'])->name('index');


    Route::group(['prefix' => 'categories'], function () {

        Route::get('/', [AdminCategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [AdminCategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{id}/edit', [AdminCategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/update', [AdminCategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('/{id}/delete', [AdminCategoryController::class, 'delete'])->name('admin.categories.delete');

    });
});
