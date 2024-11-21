<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('master.frontend');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/login', 'adminLoginForm')->name('admin.login.form');
    Route::post('/admin-login', 'adminLogin')->name('admin.login');
});

Route::get('/admin/register', [AdminController::class, 'adminRegisterForm'])->name('admin.register.form');
Route::post('/admin-register', [AdminController::class, 'adminRegister'])->name('admin.register'); 

Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

    // Learning management
    Route::get('/manage/learning', [AdminController::class, 'manageLearning'])->name('manage.learning');
    Route::post('/manage/learning/store', [AdminController::class, 'storeManageLearning'])->name('store.manage.learning');
    Route::get('/manage/learning/delete/{id}', [AdminController::class, 'deleteManageLearning'])->name('delete.manage.learning');
    Route::delete('/manage/learning//bulk-delete', [AdminController::class, 'bulkDeleteManageLearning'])->name('bulk.delete.manage.learning');
    Route::get('/manage/learning/view/page', [AdminController::class, 'viewPageManageLearning'])->name('view.page.manage.learning');
    Route::get('/manage/learning/view/{id}', [AdminController::class, 'viewanageLearning'])->name('view.manage.learning');

    Route::get('/search/manage/learning/', [AdminController::class, 'searchManageLearning'])->name('search.manage.learning');
    
});