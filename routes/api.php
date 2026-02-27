<?php

use App\Http\Controllers\api\FrontendCommonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('courses',           [FrontendCommonController::class,'getCourses']);
Route::get('/course/{slug}',    [FrontendCommonController::class, 'courseDetail']);
Route::get('blogs',             [FrontendCommonController::class,'getBlogs']);
Route::get('/blog/{slug}',      [FrontendCommonController::class, 'blogDetail']);
Route::get('/gallery',          [FrontendCommonController::class, 'gallery']);
Route::post('/verify-student',  [FrontendCommonController::class, 'verifyStudentCertificate']);

