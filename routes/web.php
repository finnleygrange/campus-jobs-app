<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\TrackerController;
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
    Route::get('/test', [AdminDashboardController::class, 'index']);
    Route::get('/timesheet', [TimesheetController::class, 'index'])->name('timesheet');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    Route::get('/tracker', [TrackerController::class, 'index'])->name('tracker');
    //Route::get('/students', [StudentController::class, 'getAll'])->name('student');
    //Route::get('/students/{student_number}', [StudentController::class, 'getOne']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::resource('/students', StudentController::class);

    // Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    // Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    // Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    // Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    // Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    // Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    // Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
