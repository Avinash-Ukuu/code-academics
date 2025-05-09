<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\cms\CommonController;
use App\Http\Controllers\cms\CourseController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\cms\SettingController;
use App\Http\Controllers\cms\StudentController;
use App\Http\Controllers\cms\DashboardController;
use App\Http\Controllers\cms\ActivityLogsController;
use App\Http\Controllers\cms\BlogController;
use App\Http\Controllers\cms\EnquiryController;

/*
|--------------------------------------------------------------------------
| CMS Routes
|--------------------------------------------------------------------------
|
| Here is where you can register CMS routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "CMS" middleware group. Make something great!
|
*/


Route::get('/dashboard',                    [DashboardController::class,'dashboard'])->name('dashboard');

// User Management
Route::resource('user',                     UserController::class);
Route::resource("role",                     RoleController::class);
Route::resource("module",                   ModuleController::class);
Route::resource("permission",               PermissionController::class);
Route::get("assign/user/roles/{id}",        [UserController::class,'assignRoleForm'])->name('assignRoles');
Route::post("submit/user/roles",            [UserController::class,'assignRole'])->name('submitRole');
Route::get("assign/role/permissions/{id}",  [RoleController::class,'assignPermissionForm'])->name('assignPermissions');
Route::post("submit/role/permissions",      [RoleController::class,'assignPermission'])->name('submitPermission');
Route::get("/change/password",              [UserController::class,'changePassword'])->name("changePassword");
Route::post("/update/password",             [UserController::class,'updatePassword'])->name("updatePassword");
Route::get("switch/user/form",              [UserController::class,'switchUserForm'])->name('switchUserForm');
Route::post("switch/user",                  [UserController::class,'switchUser'])->name('switchUser');
Route::get("logout/switch/user",            [UserController::class,'logoutSwitchUser'])->name('logoutSwitchUser');

//Setting
Route::resource('setting',                  SettingController::class);

//Activity Logs
Route::get("activity/logs",                 [ActivityLogsController::class,'index'])->name("activityLogs");

//Students
Route::resource('student',                  StudentController::class);
Route::post('store-monthly-installment',    [StudentController::class,'storeMonthlyInstallment'])->name('storeMonthlyInstallment');
Route::get('manage-student-installment',    [StudentController::class,'manageStudentInstallment'])->name('manageStudentInstallment');
Route::get('monthly-collection',            [StudentController::class,'monthlyCollection'])->name('monthlyCollection');
Route::get('export-monthly-collection',     [StudentController::class, 'exportMonthlyCollection'])->name('exportMonthlyCollection');
Route::get('export-students-data',          [StudentController::class, 'exportStudentsData'])->name('exportStudentsData');

//Courses
Route::resource('course',                   CourseController::class);

//Enquiry
Route::resource('enquiry',                  EnquiryController::class);

//Blog
Route::resource('blog',                     BlogController::class);

//Ajax Routes
Route::get('get-course-details/{id}',       [CommonController::class, 'getCourse'])->name('getCourse');

