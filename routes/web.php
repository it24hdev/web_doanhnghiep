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
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Categorypost\CategorypostController;
use App\Http\Controllers\Service\PostController2;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tin-tuc', [HomeController::class, 'list_post'])->name('list-post');
Route::get('/tin-tuc/{slug}', [HomeController::class, 'list_post_cat'])->name('list-post_cat');
Route::get('/{slug}.html', [HomeController::class, 'detail_post'])->name('detail-post');
Route::get('/dich-vu', [HomeController::class, 'list_service'])->name('list-service');
Route::get('/dich-vu/detail', [HomeController::class, 'detail_service'])->name('detail-service');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');
Route::post('/lien-he', [HomeController::class, 'contact_submit'])->name('contact_submit');
Auth::routes();
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
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

     /* ---------- Danh muc bai viet --------------- */
    Route::prefix('admin/categorypost')->group(function () {
        Route::get('/', [CategorypostController::class, 'index'])->name('categorypost.index');
        Route::get('/create', [CategorypostController::class, 'create'])->name('categorypost.create');
        Route::get('/search', [CategorypostController::class, 'search'])->name('categorypost.search');
        Route::post('/create', [CategorypostController::class, 'store'])->name('categorypost.store');
        Route::post('/update/{id}', [CategorypostController::class, 'update'])->name('categorypost.update');
        Route::get('/edit/{id}', [CategorypostController::class, 'edit'])->name('categorypost.edit');
        Route::post('/delete', [CategorypostController::class, 'destroy'])->name('categorypost.delete');

    });

    /* ---------------- POST --------------- */
    Route::prefix('admin/service')->group(function () {
        Route::get('/', [PostController2::class, 'index'])->name('post2.index');
        Route::get('/create', [PostController2::class, 'create'])->name('post2.create');
        Route::post('/create', [PostController2::class, 'store'])->name('post2.store');
        Route::get('/edit/{id}', [PostController2::class, 'edit'])->name('post2.edit');
        Route::post('/update/{id}', [PostController2::class, 'update'])->name('post2.update');
        Route::post('/delete', [PostController2::class, 'destroy'])->name('post2.delete');
        Route::post('/delete-img', [PostController2::class, 'deleteImg'])->name('post2.deleteImg');
    });

    /* ------- CUSTOMER ------------ */
    Route::prefix('admin/customer')->group(function () {
        Route::get('/list', [CustomerController::class, 'index'])->name('customer.list');
        Route::post('/force-delete', [CustomerController::class, 'forceDelete'])->name('customer.forceDelete');
    });
});
