<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizApiController;
use App\Http\Controllers\QuizStatController;
use App\Http\Controllers\QuizUserController;
use App\Http\Controllers\QuizAnswerController;
use App\Http\Controllers\cms\EnquiryController;
use App\Http\Controllers\cms\StudentController;
use App\Http\Controllers\QuizAttemptController;

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
Route::get('ppc-course-in-jalandhar',       [HomeController::class,'ppcDetail'])->name('ppcDetail');
Route::get('seo-course-in-jalandhar',       [HomeController::class,'seoDetail'])->name('seoDetail');
Route::get('smm-course-in-jalandhar',       [HomeController::class,'smmDetail'])->name('smmDetail');
Route::get('/{slug}-course-in-jalandhar',   [HomeController::class,'courseDetail'])->where('slug', '[A-Za-z0-9\-]+')->name('courseDetail');
Route::get('/course/in/jalandhar/{slug}', function ($slug) {
    return redirect()->to("/{$slug}-course-in-jalandhar", 301);
});

Route::get('/quiz/play', function () {
    return view('quiz.play');
});




// Frontend quiz APIs
Route::get('/quiz/api/categories', [QuizApiController::class, 'getCategories']);
Route::get('/quiz/api/subcategories/{category_id}', [QuizApiController::class, 'getSubcategories']);
Route::get('/quiz/api/questions/{subcategory_id}', [QuizApiController::class, 'getQuestions']);

// User & attempt endpoints (existing controllers)
Route::post('/quiz/user/start-or-get', [QuizUserController::class, 'startOrGetGuest']);
Route::post('/quiz/start', [QuizAttemptController::class, 'start'])->name('quiz.start');
Route::post('/quiz/answer', [QuizAnswerController::class, 'store'])->name('quiz.answer');
Route::post('/quiz/end/{id}', [QuizAttemptController::class, 'end'])->name('quiz.end');

// Optional stat view

Route::get('/quiz/stats/{quizUserId}', [QuizStatController::class, 'show']);

require __DIR__.'/auth.php';
