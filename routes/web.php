<?php

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

Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::group(['prefix' => '/admin'], function() {
    Route::group(['prefix' => '/danh-muc-san-pham'], function() {
        Route::get('/index', [\App\Http\Controllers\DanhMucSanPhamController::class, 'index_vue']);
        Route::post('/index', [\App\Http\Controllers\DanhMucSanPhamController::class, 'store']);
        Route::get('/data', [\App\Http\Controllers\DanhMucSanPhamController::class, 'getData']);

        Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'doiTrangThai']);

        Route::get('/delete/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'edit']);
        Route::post('/update', [\App\Http\Controllers\DanhMucSanPhamController::class, 'update']);

        Route::get('/edit-form/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'edit_form']);
        Route::post('/update-form', [\App\Http\Controllers\DanhMucSanPhamController::class, 'update_form']);

        // Route::get('/index-vue', [\App\Http\Controllers\DanhMucSanPhamController::class, 'index_vue']);
    });

    Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/index', [\App\Http\Controllers\SanPhamController::class, 'index']);
        Route::post('/tao-san-pham', [\App\Http\Controllers\SanPhamController::class, 'HamTaoSanPhamDayNe']);

        Route::get('/danh-sach-san-pham', [\App\Http\Controllers\SanPhamController::class, 'TraChoMotDoanJsonDanhSachSanPham']);
        Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\SanPhamController::class, 'DoiTrangThaiSanPham']);
        Route::get('/xoa-san-pham/{id}', [\App\Http\Controllers\SanPhamController::class, 'XoaSanPham']);
    });
});

Route::get('/agent/register', [\App\Http\Controllers\AgentController::class, 'register']);
Route::post('/agent/register', [\App\Http\Controllers\AgentController::class, 'registerAction']);
Route::get('/agent/login', [\App\Http\Controllers\AgentController::class, 'login']);
Route::post('/agent/login', [\App\Http\Controllers\AgentController::class, 'loginAction']);
Route::get('/active/{hash}', [\App\Http\Controllers\AgentController::class, 'active']);
