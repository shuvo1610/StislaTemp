<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;




Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard', [EmployeeController::class,'home'])->name('dashboard');

Route::get('employee-create', [EmployeeController::class,'create'])->name('employee.create');

Route::post('employee-store', [EmployeeController::class,'store'])->name('employee.store');

Route::get('employee-index', [EmployeeController::class,'show'])->name('employee.index');

Route::get('employee-edit/{id}', [EmployeeController::class,'edit'])->name('employee.edit');

Route::post('employee-update/{id}', [EmployeeController::class,'update'])->name('employee.update');

Route::get('employee-delete/{id}', [EmployeeController::class,'destroy'])->name('employee.delete');

Route::get('employee-profile/{id}', [EmployeeController::class,'profile'])->name('employee.profile');
