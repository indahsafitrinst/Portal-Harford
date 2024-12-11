<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\Admin;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\LabproController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScheduleController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');


Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
    });
   Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
       Route::resource('courses', \App\Http\Controllers\Teachers\CourseController::class);
   });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
});

//Branches
Route::resource('branch', BranchController::class);

//Schedule
Route::resource('schedule', ScheduleController::class);

//Sidebar
Route::get('dashboard', [SidebarController::class, 'dashboard']); 
Route::get('branches', [SidebarController::class, 'branches']); 
Route::get('teachersdata', [SidebarController::class, 'teachersdata']); 
Route::get('studentsdata', [SidebarController::class, 'studentsdata']);
Route::get('labpro', [SidebarController::class, 'labpro']); 
Route::get('announcement', [SidebarController::class, 'announcement']);
Route::get('calender', [SidebarController::class, 'calender']); 
Route::get('myprofile', [SidebarController::class, 'myprofile']); 
// sidebar on student page
Route::get('myprofile', [SidebarController::class, 'myprofile']);
Route::get('myreport', [SidebarController::class, 'myreport']);
Route::get('mylesson', [SidebarController::class, 'mylesson']);
Route::get('myteacher', [SidebarController::class, 'myteacher']);
Route::get('announcementstudent', [SidebarController::class, 'announcementstudent']);
Route::get('calenderstudent', [SidebarController::class, 'calenderstudent']);
// sidebar on teacher page
Route::get('myprofileteacher', [SidebarController::class, 'myprofileteacher']);
Route::get('mymaterials', [SidebarController::class, 'mymaterials']);
Route::get('mylessonplan', [SidebarController::class, 'mylessonplan']);
Route::get('announcementteacher', [SidebarController::class, 'announcementteacher']);
Route::get('calenderteacher', [SidebarController::class, 'calenderteacher']);

// ck editor
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');

// labpro
Route::get('music', [LabproController::class, 'music']); 
Route::get('listeningcomp', [LabproController::class, 'listeningcomp']); 
Route::get('movie', [LabproController::class, 'movie']); 
Route::get('vlog', [LabproController::class, 'vlog']); 
Route::get('speaking', [LabproController::class, 'speaking']);
Route::get('pronunciation', [LabproController::class, 'pronunciation']); 


// Student and teacher data
// student
Route::get('/student/update/{id}',[ App\Http\Controllers\Admin\StudentController::class, 'update']);
Route::get('/student/delete/{id}',[ App\Http\Controllers\Admin\StudentController::class, 'delete']);
Route::get('/student/input_data',[ App\Http\Controllers\Admin\StudentController::class, 'input']);
Route::post('/student/update_data',[ App\Http\Controllers\Admin\StudentController::class, 'update_data']);
Route::post('/student/data_student',[ App\Http\Controllers\Admin\StudentController::class, 'data_student']);

//teacher

Route::get('/teacher/update/{id}',[ App\Http\Controllers\Admin\TeacherController::class, 'update']);
Route::get('/teacher/delete/{id}',[ App\Http\Controllers\Admin\TeacherController::class, 'delete']);
Route::get('/teacher/input_data',[ App\Http\Controllers\Admin\TeacherController::class, 'input']);
Route::post('/teacher/update_data',[ App\Http\Controllers\Admin\TeacherController::class, 'update_data']);
Route::post('/teacher/data_teacher',[ App\Http\Controllers\Admin\TeacherController::class, 'data_teacher']);