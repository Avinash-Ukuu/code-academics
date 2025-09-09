<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\cms\EnquiryController;
use App\Http\Controllers\cms\StudentController;

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

Route::get('/',                 [HomeController::class,'home'])->name('home');
Route::get('/courses',          [HomeController::class,'coursePage'])->name('coursePage');
Route::get('/blogs',            [HomeController::class,'blogPage'])->name('blogPage');
Route::get('/blog/{slug}',      [HomeController::class,'blogDetail'])->name('blogDetail');
Route::get('/about-us',         [HomeController::class,'aboutUs'])->name('aboutUs');
Route::get('/contact',          [HomeController::class,'contact'])->name('contact');
Route::post('store-enquiry',    [EnquiryController::class,'storeEnquiry'])->name('enquiryStore');
Route::get('/thankyou',         [HomeController::class,'thankyou'])->name('thankyou');
Route::get('/sitemap.xml',      [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/verification',     [HomeController::class, 'verification'])->name('verification');
Route::post('verify-student-certificate',[StudentController::class, 'verifyStudentCertificate'])->name('verifyStudentCertificate');
Route::get('/gallery',          [HomeController::class,'gallery'])->name('gallery');
Route::get('/course/in/jalandhar/{slug}',   [HomeController::class,'courseDetail'])->name('courseDetail');

require __DIR__.'/auth.php';
