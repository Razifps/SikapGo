<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorSikap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\sikapgo;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MonitoringController; // Added this line to import the MonitoringController
use App\Http\Controllers\SensorController;

Route::get('/', function () {
    return view('profile');
});

Route::get('/baca_sensor', [SensorSikap::class, 'baca_sensor']); //Baca Sensor

Route::get('/simpan/{nilaisensor}', [SensorSikap::class, 'simpansensor']);
Route::get('/GetData', [SensorSikap::class, 'GetData']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Dashboard

Route::get('/admin_dashboard', [AdminController::class, 'index'])->name('admin_dashboard');
Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::get('/export', [ExportController::class, 'index']);
Route::get('/export/pdf', [ExportController::class, 'exportPDF'])->name('export.pdf');
Route::get('/export/excel', [ExportController::class, 'exportExcel'])->name('export.excel');
Route::post('/sensor-data', 'SensorController@store');

// profile

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/landing_page', [sikapgo::class, 'index_page'])->name('landing_page');
Route::get('/details', [DetailController::class, 'show'])->name('details');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

// Added this line to define the monitoring route
Route::get('/monitoring', [SensorSikap::class, 'index'])->name('monitoring');
