<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



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

// admin routes

Route::get('/dashboard-index',[AdminController::class,'index'])->name('admin.index');
Route::get('dashboard-analytics',[DashboardController::class,'analyticsview'])->name('dashboard.analytics');
Route::get('dashboard-project',[DashboardController::class,'project_index'])->name('dashboard.project');
Route::get('dashboard-crm',[DashboardController::class,'crm_index'])->name('dashboard.crm');
