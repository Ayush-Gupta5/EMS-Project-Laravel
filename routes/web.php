<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\authController;

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
Route::get('/',[EmployeeController::class,'index'] )->name('/');
Route::get('/staff',[EmployeeController::class,'staff'] )->name('staff');
Route::get('/staff_add',[EmployeeController::class,'staff_add'] )->name('staff_add');
Route::get('/department',[EmployeeController::class,'department'] )->name('department');
Route::post('/depart_store',[EmployeeController::class,'depart_store'])->name('depart_store');
Route::get('/dm_edit/{id}',[EmployeeController::class,'dm_edit'])->name('dm_edit');
Route::put('/dm_update/{id}',[EmployeeController::class,'dm_update'])->name('dm_update');
Route::post('/staff_store',[EmployeeController::class,'staff_store'])->name('staff_store');
Route::get('/depart_delete/{id}',[EmployeeController::class,'depart_delete'])->name('depart_delete');
Route::get('/staff_delete/{id}',[EmployeeController::class,'staff_delete'])->name('staff_delete');
Route::get('/staff_edit/{id}',[EmployeeController::class,'staff_edit'])->name('staff_edit');
Route::put('/staff_update/{id}',[EmployeeController::class,'staff_update'])->name('staff_update');

