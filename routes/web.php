<?php

use App\Http\Controllers\StudentController;
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
Route::match(['GET','POST'],'/login',[\App\Http\Controllers\Auth\LoginController::class,'login'])->name('route_student_login');
Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('route_student_logout');
Route::middleware(['auth','check.role'])->group(function(){
//taats caar cacs route naof muoos dudwojc baor veej thif vuowts vaof ddaay 
Route::get('/student',[App\Http\Controllers\StudentController::class,'index'])->name('route_student_index');

});
// Route::get('/student',[App\Http\Controllers\StudentController::class,'index'])->name('route_student_index');
Route::post('/student',[App\Http\Controllers\StudentController::class,'index']);
Route::match(['GET','POST'],'/student/add',[App\Http\Controllers\StudentController::class,'add'])->name('route_student_add');
Route::match(['GET','POST'],'/student/edit/{id}',[App\Http\Controllers\StudentController::class,'edit'])->name('route_student_edit');
Route::get('/student/delete/{id}',[App\Http\Controllers\StudentController::class,'delete'])->name('route_student_delete');
