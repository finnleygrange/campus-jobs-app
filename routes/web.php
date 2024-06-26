<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LineManagerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\TrackerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::view('/test', 'test');
    Route::view('/timesheet', 'timesheet')->name('timesheet');
    Route::view('/reports', 'reports')->name('reports');
    Route::view('/tracker', 'tracker')->name('tracker');
    Route::get('/form', [FormController::class, 'index'])->name('form.index');
    Route::post('/submit-form', [ReportController::class, 'store'])->name('submitForm');
    Route::post('/reports/{report}/approve', [ReportController::class, 'approve'])->name('reports.approve');
    Route::post('/reports/{report}/close', [ReportController::class, 'close'])->name('reports.close');


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/students', StudentController::class);
    Route::resource('/managers', ManagerController::class);
    Route::resource('/line-managers', LineManagerController::class);
    Route::resource('/jobs', JobController::class);
    Route::resource('/timesheets', TimesheetController::class);
    Route::resource('/reports', ReportController::class);
    Route::resource('/tracker', TrackerController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
