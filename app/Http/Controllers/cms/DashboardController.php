<?php

namespace App\Http\Controllers\cms;

use App\Models\Blog;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['studentCount']           =       Student::count();
        $data['courseCount']            =       Course::where('is_active',1)->count();
        $students                       =       Student::whereHas('studentCourse', function ($query) {
                                                    $query->whereHas('payments', function ($paymentQuery) {
                                                        $paymentQuery->where('payment_mode', 'installment');
                                                    });
                                                })->get()->filter(function ($student) {
                                                    return $student->hasPendingInstallment();
                                            });

        $data['totalMonthlyPayment']    =       $students->sum(function ($student) {
                                                    return $student->studentCourse->monthly_payment;
                                                });

        $data['activeBlogCount']        =       Blog::where('publish_type','publish')->count();

        return view('cms.dashboard',$data);
    }
}
