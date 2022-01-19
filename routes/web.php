<?php

use App\Http\Controllers\EmployeeController;
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

Route::post('/employee/create/data', [EmployeeController::class, 'EmployeeCreate'])->name('create.employee.data');
Route::get('/employee/details', [EmployeeController::class, 'DataView'])->name('employee.details');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'Edit'])->name('employee.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'Update'])->name('employee.update');

Route::get('/employee/delete/{id}', [EmployeeController::class, 'Delete'])->name('employee.delete');
Route::post('/employee/search', [EmployeeController::class, 'Search'])->name('search');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
