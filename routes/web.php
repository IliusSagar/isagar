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
    
});