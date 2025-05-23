<?php

use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;

use Illuminate\Support\Facades\Route;

Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computers/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computers/store', [ComputerController::class, 'store'])->name('computer.store');


Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('areas/create', [AreaController::class, 'create'])->name('area.create');
Route::post('areas/store', [AreaController::class, 'store'])->name('area.store');


Route::get('trainings', [TrainingCenterController::class, 'index'])->name('training.index');
Route::get('trainings/create', [TrainingCenterController::class, 'create'])->name('training.create');
Route::post('trainings/store', [TrainingCenterController::class, 'store'])->name('training.store');


Route::get('aprendices', [AprendiceController::class, 'index'])->name('aprendice.index');
Route::get('aprendice/create', [AprendiceController::class, 'create'])->name('aprendice.create');
Route::post('aprendice/store', [AprendiceController::class, 'store'])->name('aprendice.store');


Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');


Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
