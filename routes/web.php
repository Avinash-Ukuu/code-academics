<?php

use App\Http\Controllers\cms\EnquiryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',                 [HomeController::class,'home'])->name('home');
Route::post('store-enquiry',    [EnquiryController::class,'storeEnquiry'])->name('enquiryStore');
Route::get('/thankyou',         [HomeController::class,'thankyou'])->name('thankyou');

require __DIR__.'/auth.php';
