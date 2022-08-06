<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Slider\SliderController;
use App\Http\Controllers\Post\PostController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();

/* ========== ADMIN =========== */

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    /*----------- USER ----------*/
    Route::prefix('admin/user')->group(function () {
        Route::get('/info', [UserController::class, 'info'])->name('user.info');
        Route::get('/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update', [UserController::class, 'update'])->name('user.update');
        Route::get('/editPassword', [UserController::class, 'editPassword'])->name('user.editPassword');
        Route::post('/updatePassword', [UserController::class, 'updatePassword'])->name('user.updatePassword');

        Route::get('/list', [AdminController::class, 'index'])->name('user.list');
        Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
        Route::get('/edit-user/{id}', [AdminController::class, 'edit'])->name('admin.edit');
        Route::post('/delete', [AdminController::class, 'delete'])->name('admin.delete');
        Route::post('/restore', [AdminController::class, 'restore'])->name('admin.restore');
        Route::post('/force-delete', [AdminController::class, 'forceDelete'])->name('admin.forceDelete');
        Route::post('/updatePassword-user/{id}', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');
    });

    /* ---------- ROLE ------------- */
    Route::prefix('admin/role')->group(function () {
        Route::get('/list', [RoleController::class, 'index'])->name('role.list');
        Route::get('/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::post('/update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::post('/delete', [RoleController::class, 'delete'])->name('role.delete');
    });

    /* --------- Slider ------------ */
    Route::prefix('admin/slider')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('slider.index');
        Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('/create', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::post('/delete', [SliderController::class, 'destroy'])->name('slider.delete');
        Route::post('/delete-img', [SliderController::class, 'deleteImg'])->name('slider.deleteImg');
        Route::post('/get-data', [SliderController::class, 'getData'])->name('slider.getdata');
    });

    /* ---------------- POST --------------- */
    Route::prefix('admin/post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/create', [PostController::class, 'store'])->name('post.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::post('/update/{id}', [PostController::class, 'update'])->name('post.update');
        Route::post('/delete', [PostController::class, 'destroy'])->name('post.delete');
        Route::post('/delete-img', [PostController::class, 'deleteImg'])->name('post.deleteImg');
    });

});
