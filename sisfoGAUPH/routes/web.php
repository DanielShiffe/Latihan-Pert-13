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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/replaceclass/cetak_pdf', 'App\Http\Controllers\Admin\replaceclassController@cetak_pdf');

Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\categoryController');
Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\categoryController');
Route::resource('admin/user-roles', 'App\\Http\\Controllers\\Admin\userRolesController');
Route::resource('admin/missing', 'App\Http\Controllers\Admin\MissingController');
Route::resource('admin/reservation', 'App\Http\Controllers\Admin\ReservationController');
Route::resource('admin/attendance', 'App\\Http\\Controllers\\Admin\attendanceController');
Route::resource('admin/reservation', 'App\Http\Controllers\Admin\reservationController');
Route::resource('admin/rstatus', 'App\Http\Controllers\Admin\rstatusController');
Route::resource('admin/schedule', 'App\Http\Controllers\Admin\scheduleController');
// Route::resource('admin/replacement_class', 'App\Http\Controllers\Admin\replacement_classController');

Route::resource('admin/replaceclass', 'App\Http\Controllers\Admin\replaceclassController');
Route::resource('admin/room', 'App\Http\Controllers\Admin\roomController');
Route::resource('admin/location', 'App\Http\Controllers\Admin\locationController');
Route::resource('admin/location', 'App\Http\Controllers\Admin\locationController');
Route::resource('admin/locations', 'App\Http\Controllers\Admin\locationsController');
Route::resource('admin/lokasi', 'App\Http\Controllers\Admin\lokasiController');