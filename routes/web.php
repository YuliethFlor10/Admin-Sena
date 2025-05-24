<?php

use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use App\Models\Aprendice;
use Illuminate\Support\Facades\Route;

Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computers/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computers/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');


Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('areas/create', [AreaController::class, 'create'])->name('area.create');
Route::post('areas/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');


Route::get('trainings', [TrainingCenterController::class, 'index'])->name('training.index');
Route::get('trainings/create', [TrainingCenterController::class, 'create'])->name('training.create');
Route::post('trainings/store', [TrainingCenterController::class, 'store'])->name('training.store');
Route::get('training/{training}', [TrainingCenterController::class, 'show'])->name('training.show');
Route::put('training/{training}',[TrainingCenterController::class,'update'])->name('training.update');
Route::delete('training/{training}',[TrainingCenterController::class,'destroy'])->name('training.destroy');
Route::get('training/{training}/editar',[TrainingCenterController::class,'edit'])->name('training.edit');


Route::get('aprendices', [AprendiceController::class, 'index'])->name('aprendice.index');
Route::get('aprendice/create', [AprendiceController::class, 'create'])->name('aprendice.create');
Route::post('aprendice/store', [AprendiceController::class, 'store'])->name('aprendice.store');
Route::get('aprendice/{aprendice}', [AprendiceController::class, 'show'])->name('aprendice.show');
Route::put('aprendice/{aprendice}',[AprendiceController::class,'update'])->name('aprendice.update');
Route::delete('aprendice/{aprendice}',[AprendiceController::class,'destroy'])->name('aprendice.destroy');
Route::get('aprendice/{aprendice}/editar',[AprendiceController::class,'edit'])->name('aprendice.edit');


Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::put('course/{course}',[CourseController::class,'update'])->name('course.update');
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');
Route::get('course/{course}/editar',[CourseController::class,'edit'])->name('course.edit');


Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');
